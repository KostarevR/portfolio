<?php 
class OzonParser {
    private string $url;
    private string $html;

    public function __construct(string $sku)
    {
        $this->url = "https://www.ozon.ru/product/" . $sku . "/";
        $this->html = $this->getPage($this->url);
    }

    private function getPage(string $url): string {
        $ch =curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_MAXREDIRS => 5,
        ]);

        $result = curl_exec($ch);
        curl_close($ch);

        if ( !$result) {
            if (file_exists(__DIR__ . '/ozon.html')) {
                return file_get_contents(__DIR__ . '/ozon.html');
            }
            return '';
        }
        return $result;
    }

    public function parse(): array {
        return [
            'title' => $this->getTitle(),
            'category' => $this->getCategory(),
            'type' => $this->getType(),
            'country' => $this->getCountry(),
            'part_number' => $this->getPartNumber(),
            ';manufacturer_country' => $this->getManufacturerCountry(),
            'image' => $this->getImages(),
            'description' => $this->getDescription(),
            'features' => $this->getFeatures(),
        ];
    }

    private function getTitle(): ?string {
        if (empty($this->html)) {
            return null;
        }

        $doc = new DOMDocument();
        @$doc->loadHTML($this->html);

        $nodes = $doc->getElementsByTagName('h1');
        if ($nodes->length > 0) {
            return trim($nodes->item(0)->textContent);
        }
        return null;
    }

    private function getCategory(): array {
        if (empty($this->html)) {
            
            return [];
        } 

        $doc = new DOMDocument();
        @$doc->loadHTML($this->html);

        $categories = [];
        $xpath = new DOMXPath($doc);

        $nodes = $xpath->query("//div[@data-widget='breadCrumbs']//a");

        foreach ($nodes as $node) {
            $categories[] = trim($node->textContent);

        }
        return $categories;
    }

    private function getType(): ?string {
        return $this->getFeatureByName('Тип');
    }
    private function getCountry(): ?string {
        return $this->getFeatureByName('Страна');
    }
    private function getPartNumber(): ?string {
        return $this->getFeatureByName('Партномер') ?: $this->getFeatureByName('Артикул производителя');
    }
    private function getManufacturerCountry(): ?string {
        return $this->getFeatureByName('Страна Изготовитель');
    }
    private function getImages(): array {
        $images = [];
        if (preg_match_all('/"cellImage":\{"src":"(.*?)"/', $this->html, $m)) {
            $images = array_map(function ($url) {
                return htmlspecialchars_decode($url, ENT_QUOTES);
            }, $m[1]);
        }
        return $images;
    }

    private function getDescription(): ?string {
        if (preg_match('/<div[^>]*data-widget="webDescription"[^>]*>(.*?)<\/div>/su', $this->html, $m)) {
            return trim(strip_tags($m[1]));
        }
        return null;
    }

    private function getFeatures(): array {
        $features = [];

        if (preg_match_all('/<dt[^>]*>(.*?)<\/dt>\s*<dd[^>]*>(.*?)<\/dd>/su', $this->html, $m, PREG_SET_ORDER)) {
            foreach ($m as $row) {
                $key = trim(strip_tags($row[1]));
                $val = trim(strip_tags($row[2]));
                $features[$key] = $val;
            }
        }
        return $features;
    }
    
    private function getFeatureByName(string $name): ?string {
        $features = $this->getFeatures();
        foreach ($features as $key => $val) {
            if (mb_strpos($key, $name) !== false) {
                return $val;
            }
        }
        return null;
    }
    
}
$parser = new OzonParser('762519015'); //артикул товара
$result = $parser->parse();
echo "<pre>";
var_dump($result);

?>