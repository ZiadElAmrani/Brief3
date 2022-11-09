//ADD PROMOTION ::

















//Search

let search = document.querySelector("#search");

search.addEventListener("keyup", () => {
        fetch("search/" + search.value, {
            method: "GET"
        }).then((res) => {
            return res.text();
        }).then((data) => {
            console.log(data);
            document.getElementById('search_table').innerHTML = data;

        }
        )

}
)

