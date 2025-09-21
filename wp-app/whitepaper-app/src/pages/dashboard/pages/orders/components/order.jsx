export default function Order(props) {
    return (
        <div className="orders-general__item flex col p-8 gap-3">
            <div className="orders-general-item__header">{props.title}</div>
            <div className="orders-general-item__body flex a-c">{props.body}</div>
            <div className="orders-general-item__footer">{props.footer}</div>
        </div>
    )
}