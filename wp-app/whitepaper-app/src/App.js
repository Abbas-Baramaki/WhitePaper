import "./assets/styles/reset.css";
import "./assets/styles/fonts.css";
import "./assets/styles/helper.css";
import "./index.css";
import Header from "./components/header/header.jsx";
import Cookie from "./components/cookie/cookie.js";
import Footer from "./components/footer/footer.jsx"

import { BrowserRouter, Routes, useNavigate, Route, useLocation } from "react-router-dom";


import Home from "./pages/home/home.jsx";
import NF from "./pages/NotFound/notfound.jsx";
import Login from "./pages/login/login.jsx";
import Books from "./pages/books/books.jsx";
import Product from "./pages/product/product.jsx";
import React,{ use, useEffect, useState } from "react";
import icons from "./assets/svg/icons.js"



function App() {

  const cookie = new Cookie();

  return (
    <div>
      <BrowserRouter>
      
      
      {cookie.get_cookie("token") ? <Header name={"White Paper"} icons={icons} logged="true" cookie={cookie}></Header> : <Header name={"White Paper"} icons={icons} logged= {false} cookie={cookie}></Header>}
      <Routes>

        <Route path="/" element={<Home/>}></Route>
        <Route path="*" element={<NF icons={icons}/>}></Route>
        <Route path="login" element={<Login/>}></Route>
        <Route path="profile" element={""}></Route>
        <Route path="books" element={<Books icons={icons}/>}></Route>
        <Route path="product/:id" element={<Product icons={icons}/>}></Route>
      </Routes>
    </BrowserRouter>
    </div>
  )
}

export default App;
