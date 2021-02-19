alert('Hello Worls');
console.log('Hello World');
console.error('this is an error');
console.warn('this is a warning');
let age = 30;
age = 30
const name = 'Brad';
const age = 20;
const rating = 3.5;
const isCool = true;
const x = null;
const y = undefined;
let z;
console.log(typeof z);
console.log('my name is' + name + ' and i am ' + age);
console.log('my name is ${name} and I am ${age}');
btn.addEventListener('click', e => {
    e.preventDefault();
    console.log(e.target.className);
    document.ElementById('my-form').style.background = '#ccc';
    document.querySelector('body').classList.add('bg-dark');
    ul.lastElementChild.innerHTML = '<h1>Changed</h1>'
})
const nameInput = document.querySelector('#name');
nemuInput.addEventListener('input', e => {
    document.querySelector(',container').append(nameInput.value);
});
const myForm = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const msg = document.querySelector('.msg');
const userList = document.querySelector('#users');
myForm.addEventListener = document.querySelector('#users');
function onSubmit(e) {
    e.preventDefault();
    if(nameInput.value === '' || emailInput.value == '') {
        msg.classList.add('error');
        msg.innerHTML = 'Please enter all fields';
        setTimeout(() => msg.remove(), 3000);
    } else {

        const li = document.createElement('li');
        li.appendChild(document.createTextNode(''))
    }
}
class Book {
    constructor(title, author, isbn) {
        this.title = title;
        this.author = author;
        this.isbn = isbn;
    }
}
class UI {
    static displayBooks() {
        const books = Store.getBooks();
        books.forEach((book) => UI.addBookToList(book));
    }
    static addBookToList(book) {
        const list = document.querySelector('#book-list');
        const row = document.createElement('tr');
        row.innerHTML = '';
        list.appendChild(row);
    }
    static deleteBook(el) {
        if(el.classList.contains('delete')) {
            el.parentElement.parentElement.remove();
        }
    }
    static showAlert(message, className) {
        const div = document.createElement('div');
        div.className = 'alert alert-${className}';
        div.appendChild(document.createTextNode(message));
        const container = document.querySelector('.container');
        const form = document.querySelector('#book-form');
    }
    static addBook(book) {
        const books = Store.getBooks();
        books.push(book);
        localStorage.setItem('books', JSON.stringify(books))
    }
}
var x = 11;
