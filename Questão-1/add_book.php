session_start();
require_once __DIR__ . 'database.php';

function addBook() {
    const title = document.querySelector("#title").value;
    const author = document.querySelector("#author").value;

    fetch("http://localhost:3000/add_book", {
        method: "post"
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({title, author})
    })
    .then(res => res.json())
    .then(() => location.reload());
}
