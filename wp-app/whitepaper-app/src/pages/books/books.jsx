import Cookie from "../../components/cookie/cookie.js";
import Grid from "../../components/gridview/gridContainer.jsx";
import "./books.css"
function Books(props)
{
    return (
        <div className="books">
            <Grid limit="12" icon={props.icons}></Grid>
        </div>

    )
}

export default Books;