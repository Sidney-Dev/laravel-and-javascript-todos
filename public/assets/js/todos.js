/**
 * create the main constants
 */
/*****************************
 *   CONSTANT DECLARATIONS
 ****************************/
const addForm = document.querySelector('form.add');     // form to enter a new todo
const list = document.querySelector('.todos')           // ul containing all the todos
const searchForm = document.querySelector('form.search');   // form to search for a todo

/*****************************
 *    Method expressions
 ****************************/
const listTodos = () => {

    axios
    .get('/todos/all')
    .then( response => {
        const todos = response.data;
        todos.forEach( todo => addTodo(todo.name, todo.id));
    })
    .catch(err => console.log(err));
};

/**
 * 
 * @param {*} todo 
 * @param {*} id . Used to set the data-target. This serves as reference during an update/delete process
 */
const addTodo = (todo, id = null) => {
    const html = `
        <li data-target="${id}" class="list-group-item d-flex justify-content-between align-items-center">
        <span>${todo}</span>
        <i class="far fa-trash-alt delete"></i>
        </li>
    `;
    list.innerHTML += html;
};

// this is what runs when the page loads
listTodos();

/***************SUBMISSION METHODS****************/

/**
 * Deleting a todo
 */
list.addEventListener('click', e => {

    console.log(e);
    const ID = e.target.parentElement.getAttribute('data-target'); // this is has the item ID
    const targetedList = e.target;                                 // this is the element we clicked

    // check if we clicked on the delete icon
    if(targetedList.classList.contains('delete')) {

        axios
        .delete(`todo/${ID}/delete`)
        .then(res => {
            if(res.statusText === 'OK'){
                targetedList.parentElement.remove();
            }
        })
        .catch(err => alert("Something went wrong. Possible API connection issue"));
    }
});

/**
 * Add new todo
 * when the user enter a todo in the form field
 * we must get the text that is in the input and put in a varialble
 * this same text is what will go to the database;
 */
addForm.addEventListener('submit', function(e) {

    e.preventDefault();         

    axios
    .post('/todo/store', { name: this.add.value.trim() })
    .then( response => {
        if(response.statusText == "Created"){
            addTodo(response.data.name, response.data.id);
            addForm.reset(); // clear the form fields
        } 
    })
    .catch(err => console.log(err));

});


/**
 * Search
 */
searchForm.addEventListener('keyup', e => {

    e.preventDefault();
    const inputText = e.target.value.toLowerCase().trim(); // get the input text
    
    const listItems = Array.from(list.children);// get all ul lists and convert to an array

    listItems.map(item => item.textContent.toLowerCase().trim().includes(inputText) ? item.classList.remove('filtered') : item.classList.add('filtered'));

});



