function deleteBook(id) {

    fetch("http://localhost:3000/delete_book", {
        method: "post"
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({id})
    })
    .then(res => res.json())
    .then(() => location.reload());
}
