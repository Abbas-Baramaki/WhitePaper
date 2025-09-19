import "./container.css";
import Book from "./book.jsx";
import Item from "../api/out.js"
import { useEffect, useState } from "react";
import item from "../api/out.js";
function GridContainer(props) {
    const address = "http://localhost/whitepaper";
    let limit = parseInt(props.limit);
    const [book, setBook] = useState(new Array());

    
    useEffect(() => {
        let temp_books = new Array();
        const res = fetch(`http://localhost/WhitePaper/wp-json/whpapi/books?limit=${limit}`).then(response => {
            if (response.ok) {
                return response.json()
            }
            else {
                throw new Error("API ERROR");
            }

        }).then(data => {
            Array.from(data).forEach(obj => {
                let book = new Item(
                    obj.title,
                    obj.description,
                    obj.price,
                    obj.author,
                    obj.reseller,
                    obj.viewCount,
                    obj.stars,
                    obj.image_path,
                    obj.amount,
                    obj.pk
                );
                console.log(obj.amount)
                temp_books.push(book)
            })
            setBook(temp_books);


        })

    }, [])
    return (
        <div className="booksgrid flex col a-s jc-c">
            <div className="booksgrid__header wf flex jc-c a-c">{props.title}</div>
            <div className="booksgrid__body wf flex row a-c jc-c gap-6 shadow-m">
                {book.map((element, index) => (
                    <div key={index} className="booksgrid-body__item p-4 ">
                        <div className="booksgrid-body-item__pic">
                            <img src={address + element.path} alt={element.title} />
                            
                        </div>
                        <div className="booksgrid-body-item__body flex col gap-8 p-2">
                            <div className="booksgrid-body-item-body__title flex jc-s a-c ">{element.title}</div>
                            <div className="booksgrid-body-item-body__body flex col gap-4">
                                <div className="booksgrid-body-item-body-body__description">{element.description}</div>
                            </div>
                        </div>
                        <div className="booksgrid-body-item__footer flex col p-2">
                            <div className="booksgrid-body-item-footer__general flex row">
                                <div className="booksgrid-body-item-footer-general__item flex row gap-4">
                                    <div className="booksgrid-body-item-footer-general-item__icon flex a-c jc-c">
                                        {props.icon["eye"]}
                                    </div>
                                    <div className="booksgrid-body-item-footer-general-item__content flex a-c jc-s">{element.viewCount}</div>
                                </div>
                                <div className="booksgrid-body-item-footer-general__item flex row gap-4">
                                    <div className="booksgrid-body-item-footer-general-item__icon flex a-c jc-c">
                                        {props.icon["star"]}
                                    </div>
                                    <div className="booksgrid-body-item-footer-general-item__content flex a-c jc-s">{element.stars}</div>
                                </div>
                                <div className="booksgrid-body-item-footer-general__item flex row gap-4">
                                    <div className="booksgrid-body-item-footer-general-item__icon flex a-c jc-c">
                                        {props.icon["dollar"]}
                                    </div>
                                    <div className="booksgrid-body-item-footer-general-item__content flex a-c jc-s">{element.price}</div>
                                </div>
                                <div className="booksgrid-body-item-footer-general__item flex row gap-4">
                                    <div className="booksgrid-body-item-footer-general-item__icon flex a-c jc-c">
                                        {props.icon["product"]}
                                    </div>
                                    <div className="booksgrid-body-item-footer-general-item__content flex a-c jc-s">{element.amount}</div>
                                </div>
                            </div>
                            <a href={"/product/"+element.pk} className="flex a-c jc-c">Porchuse</a>
                        </div>


                    </div>

                ))}
            </div>
            <div className="booksgrid__footer wf flex col a-c jc-c">

            </div>
        </div>
    );
}

export default GridContainer;
