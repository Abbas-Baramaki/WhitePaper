import "./assets/styles/reset.css";
import "./assets/styles/fonts.css";
import "./assets/styles/helper.css";
import "./index.css";
import { BrowserRouter, Routes, useNavigate, Route } from "react-router-dom";


import Home from "./pages/home/home.jsx";
import React,{ useState } from "react";


function App() {

  return (
    <div>
      <BrowserRouter>
      <Routes>

        <Route path="/" element={<Home/>}></Route>

      </Routes>
    </BrowserRouter>
    </div>
  )
}

export default App;
