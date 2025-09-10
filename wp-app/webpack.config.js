var path = require("path");

module.exports = {

    entry : "./whitepaper-app/js",

    output:{
        path: path.resolve(__dirname,"/whitepaper-app/dist"),
        filename : "boundle.js"
    }
}