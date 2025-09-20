import item from "../api/out";

class Cookie{
    
    constructor(){
        this.cookies = document.cookie.split(";");
    }
    update()
    {
        this.cookies = document.cookie.split(";");
    }
    get_cookie(attr){
        for (let i of this.cookies){
            const [key,value] = i.trim().split("=");
            if (String(attr) == key.trim()){
                return value;
            }
        }
    }
    set_cookie(attr,value){
        document.cookie = `${attr}=${value}`;
        this.update();
    }


}
export default Cookie;