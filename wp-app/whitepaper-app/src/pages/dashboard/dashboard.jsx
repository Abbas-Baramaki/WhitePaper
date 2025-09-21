import { useEffect } from "react";
import "./assets/css/dashboard.css";
import Item from "./component/action-item.jsx";
import {Outlet} from "react-router-dom";


import NF from "../NotFound/notfound.jsx";
function Dashboard(props) {
    // 
    const items = [
        { content: "Order", url: "/dashboard/orders", icon: "order" },
        { content: "Tickets", url: "/dashboard//tickets", icon: "message" },
        { content: "Purchase", url: "/books", icon: "purchase" },
        { content: "Setting", url: "/dashboard//setting", icon: "setting" },

    ];

    return (
        <div className="dashboard flex row">
            <div className="dashboard__action flex col gap-4 p-4 ">
                {
                    items.map((item) => {
                        return <Item content={item["content"]} icon={props.icons[item.icon]} url={item.url}></Item>
                    })
                }

            </div>
            <div className="dashboard__actionview">
                <Outlet></Outlet>
            </div>
        </div>
    )
}
export default Dashboard;