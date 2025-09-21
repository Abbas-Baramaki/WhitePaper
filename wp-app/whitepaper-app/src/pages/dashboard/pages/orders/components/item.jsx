export default function Row(props) {
    return (
        <div className="orders-grid__row flex row">
            { !props.data ? 
                props.columns.map((col)=>{
                    col = col.replace("_"," ");
                    col = col.charAt(0).toUpperCase() + col.slice(1);
                    col = col.replace("Pk","ID");
                    return <div className={`orders-grid-row__col flex a-c jc-c ${props.style}`}>{col}</div>
                })
                :

                
                Object.values(props.data).map((col,index)=>{
                    {col == "" || col == " " || col == null ? col = "Empty" : col = col}
                    return <div key={index} className={`orders-grid-row__col flex a-c jc-c ${props.style}`}>{col}</div>
                })
            }
        </div>
    )
}