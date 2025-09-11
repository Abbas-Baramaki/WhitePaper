import "./assets/styles/reset.css";
import "./assets/styles/fonts.css";
import "./assets/styles/helper.css";


import icons from  "./assets/svg/icons.js"
import { Fragment } from "react/jsx-runtime";
import {React,useState} from "react";
import Header from "./components/header/header";



function App() {
  const [name,set_name] = useState("White Paper")
  return (
    <Fragment>
      <Header name={name} icons={icons}></Header>
    </Fragment>
  )
}

export default App;
