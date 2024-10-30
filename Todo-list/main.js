const addTaskBtn = document.getElementById('add-task-btn'); //добавляем константу для кнопки
const deskTaskInput = document.getElementById('description-task'); // добавляем константу для ввода пользователя
const todosWrapper = document.querySelector('.todos-wrapper');

let tasks; // готовим массив для задач, не забываем перевести значения из локалки обратно через парс
!localStorage.tasks ?  tasks = [] : tasks = JSON.parse(localStorage.getItem('tasks')); //парсим данные из локалки и проверяем условия пустого массива

let todoItemsElems = []; //создаем пустой массив под блоки див с html
//пишем функцию для выполненной задачи и присваиваем ей новое булеевое значение
function Task(description) {
    this.description = description;
    this.completed = false;
}
//тут создаем функцию для создания блоков с задачами
const createTemplate = (task, index) => { // параметры присваиваем задачу и индекс
    return ` 
    <div class="todo-item ${task.completed ? 'checked' : ''}">
        <div class="description">${task.description}</div>
        <div class="buttons">
            <input onclick ="completeTask(${index})" class="btn-complete" type="radio" ${task.completed ? 'checked' : ''}>
            <button onclick ="deleteTask(${index})" class="btn-delete">Del</button>
        </div>
        </div>
        <div class="border-line"></div>

    `
}
//функция для создания порядка отображения задач где активные первые и выполненные последние
const filterTasks = () => {
    const activeTasks = tasks.length && tasks.filter(item => item.completed == false);
    const completedTasks = tasks.length && tasks.filter(item => item.completed == true);
    tasks = [...activeTasks,...completedTasks];
}

const fillHtmlList = () => { //функция для фильтрации массива при условии что массив не пустой
    if (tasks.length > 0) {
        filterTasks();
    } else {

    }
    todosWrapper.innerHTML = ""; //если массив не пустой ищем в массиве итем и индек и изменяем html 
    if (tasks.length > 0) {
        tasks.forEach((item, index) => {
            todosWrapper.innerHTML += createTemplate(item, index);
        });
        todoItemsElems = document.querySelectorAll('.todo-item');
        
    }
}
fillHtmlList();
// функция обновления локальных файлов массива внутри браузера
const updateLocal = () => {
    localStorage.setItem('tasks', JSON.stringify(tasks)); // локалка любит Json соответственно переводим в формат строки
}
// функция для добавления нового класса выполненным задачам
const completeTask = index => {
    tasks[index].completed = !tasks[index].completed;
    if(tasks[index].completed) {
        todoItemsElems[index].classList.add('checked');
    } else {
        todoItemsElems[index].classList.remove('checked');
    }
    updateLocal();
    fillHtmlList();
}
//делаем пустую сроку ввода после добавления задачи
addTaskBtn.addEventListener('click', () => {
    tasks.push(new Task(deskTaskInput.value));
    updateLocal();
    fillHtmlList();
    deskTaskInput.value = '';
})
// создаем удаление класса
const deleteTask = index => {
    todoItemsElems[index].classList.add('delition');
    setTimeout(() => {
        tasks.splice(index, 1);
        updateLocal();
        fillHtmlList();
    }, 500)
}