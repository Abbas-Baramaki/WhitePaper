import "./orders.css";

import Order from "./components/order.jsx";
import Row from "./components/item.jsx";


import { useEffect, useState } from "react";
export default function Orders(props) {


    const [delivered, setDelivered] = useState(0);
    const [waitingForDelivery, setWaitingForDelivery] = useState(0);
    const [inCard, setInCard] = useState(0);
    const [canceled, setCanceled] = useState(0);

    useEffect(() => {
        if (props.user) {
            let d = 0 ,w = 0,i = 0,c = 0;
            Array.from(props.user.orders).forEach((order) => {
                switch (parseInt(order["status"])) {
                    case 0: c++;break
                    case 1:i++;break;
                    case 2:w++;break
                    case 3:d++;break
                }
            })
            setCanceled(c);
            setInCard(i);
            setWaitingForDelivery(w);
            setDelivered(d);
        }


    },[props.user])
    let general_items = [
        { "title": "Delivered", "body": delivered, "footer": "" },
        { "title": "Waiting for delivery", "body": waitingForDelivery, "footer": "" },
        { "title": "In card", "body": inCard, "footer": "" },
        { "title": "Canceled", "body": canceled, "footer": "" },
    ];

    return (
        <div className="orders flex col wf hf">
            <div className="orders__general flex row a-c jc-c p-8 gap-8">
                {general_items.map((item) => {
                    return <Order title={item.title} body={item.body} footer={item.footer}></Order>
                })}
            </div>
            <div className="orders__grid flex col p-4 gap-2">
                <Row columns={["pk","product","user","status","tracking_code","date"]} data={""} style={"bg-gray"}></Row>
                { props.user && props.user.orders ? props.user.orders.map((order)=>{
                    return <Row data={order}></Row>;
                }) :
                ""
                }
            </div>
        </div>
    )
}