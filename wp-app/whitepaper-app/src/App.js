import "./assets/styles/reset.css";
import "./assets/styles/fonts.css";
import "./assets/styles/helper.css";
import "./index.css";
import Header from "./components/header/header.jsx";
import Cookie from "./components/cookie/cookie.js";
import Footer from "./components/footer/footer.jsx"

import { BrowserRouter, Routes, useNavigate, Route, useLocation, data } from "react-router-dom";


import Home from "./pages/home/home.jsx";
import NF from "./pages/NotFound/notfound.jsx";
import Login from "./pages/login/login.jsx";
import Books from "./pages/books/books.jsx";
import Product from "./pages/product/product.jsx";
import User from "./components/api/user.js"

import Dashboard from "./pages/dashboard/dashboard.jsx";
import Orders from "./pages/dashboard/pages/orders/orders.jsx"


import React, { use, useEffect, useState } from "react";
import icons from "./assets/svg/icons.js"



function App() {

  const cookie = new Cookie();

  let body = new URLSearchParams();
  let body_id = new URLSearchParams();
  const token = cookie.get_cookie("token");
  let userid ;
  const [user, setUser] = useState(null);
  useEffect(() => {

    if (token) {
      body_id.append("Authorization", `Bearer ${token}`);
      fetch("http://localhost/WhitePaper/wp-json/wp/v2/users/me",
        {
          method: "POST",
          headers: body_id
        }
      ).then(res => res.json()).then(data => {
        userid = data["id"];
      })

      body.append("username", cookie.get_cookie("user_nicename"));
      fetch("http://localhost/WhitePaper/wp-json/whpapi/user",
        {
          method: "POST",
          body: body
        }).then(resposne => resposne.json()).then(data => {
          let orders = new Array();

          Array.from(data).forEach((row) => {
            orders.push({
              "pk": row["pk"],
              "product": row["product"],
              "user": row["user"],
              "status": row["status"],
              "tracking_code": row["tracking_code"],
              "date": row["date"]
            })
          })
          setUser(new User(userid,cookie.get_cookie("token"), cookie.get_cookie("user_nicename"), cookie.get_cookie("user_nicename"), orders));
          
        });
    }
  },[])
  return (
    <div>
      <BrowserRouter>


        {cookie.get_cookie("token") ? <Header name={"White Paper"} icons={icons} logged="true" cookie={cookie}></Header> : <Header name={"White Paper"} icons={icons} logged={false} cookie={cookie}></Header>}
        <Routes>

          <Route path="/" element={<Home />}></Route>
          <Route path="*" element={<NF icons={icons} />}></Route>
          <Route path="login" element={<Login />}></Route>
          <Route path="profile" element={""}></Route>
          <Route path="books" element={<Books icons={icons} />}></Route>
          <Route path="product/:id" element={<Product icons={icons} />}></Route>
          <Route path="dashboard/*" element={<Dashboard icons={icons} />}>

            <Route path="*" element={<NF icons={icons} />}></Route>
            <Route path="orders" element={<Orders user={user} />}></Route>

          </Route>
        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App;
