import "./home.css";
import pattric_tommas from "../../assets/images/pattric-tommaso_papers.jpeg";
import icons from "../../assets/svg/icons.js";
import  React , {useState } from "react";
import Header from "../../components/header/header.jsx";
import GridContainer from "../../components/gridview/gridContainer.jsx";
import Book from "../../components/gridview/book.jsx";
function Home() {

    const [name,setname] = useState("White Paper")
    return (
        <div className="container flex col">
            <Header name={"White Paper"} icons={icons}></Header>
            <div className="content flex row a-c jc-c gap-2">
                <div className="content_intro_content flex col jc-c">
                    <div className="content-intro-content__header flex a-e jc-c">
                        Unlock New Worlds Through Pages
                    </div>
                    <div className="content-intro-content__body flex pt-8">
                        Discover the transformative power of reading with our curated collection of books, each one chosen to spark imagination, fuel curiosity, and open the mind to new horizons. More than words on paper, these titles are gateways to discovery—inviting you to explore untold stories, engage with diverse voices, and uncover hidden parts of yourself along the way. Every book is a companion that inspires reflection, nurtures creativity, and reminds you of the endless possibilities waiting within the pages.
                    </div>
                    <div className="content-intro-content__footer flex a-c jc-s">
                        <div className="content-intro-content-footer__explore flex a-c jc-c">
                            <a href="/books" className="content-intro-content-footer-explore-content flex a-c jc-c">Explore Books</a>
                        </div>
                    </div>
                </div>
                <div className="content_intro_pic flex a-c jc-c p-2">
                    <img src={pattric_tommas} alt="Logo" className="" />
                </div>
            </div>
            <GridContainer limit="4" icon={icons} title="Books Of The Month">

            </GridContainer>
        </div>
    )
}

export default Home;