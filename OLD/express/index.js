const express = require("express")
const app = express()

async function fetchData() {
    const res = await fetch("http://alexwebdev.unaux.com/api.php")
    const data = await res.text()
    return data
}

console.log(fetchData())

app.get("/", function (req, res) {
    res.send()
})

// app.listen(process.env.PORT)

app.listen(3000)
