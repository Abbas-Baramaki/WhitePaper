import { useNavigate } from "react-router-dom";

export default function Item(props)
{
    const navigate = useNavigate();
    function item_select(e)
    {
        document.querySelectorAll(".dashboard-action-item__content").forEach((element)=>{
            element.classList.remove("select");
        })
        e.currentTarget.classList.toggle("select");
        navigate(props.url)
    }
    return (
        <div className="dashboard-action__item flex row" >
            <div className="dashboard-action-item__icon hf flex a-c jc-c">{props.icon}</div>
            <div className="dashboard-action-item__content hf flex a-c jc-s" onClick={item_select}>{props.content}</div>
        </div>
    )
}