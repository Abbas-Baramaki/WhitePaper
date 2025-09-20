import "./notfound.css"

function NotFound(props)
{
    return (
        <div className="nf flex a-c jc-c row gap-2">
            <div className="nf__icon flex a-c jc-e">{props.icons["badluck"]}</div>
            <div className="nf__content flex col a-c gap-4">
                <div className="nf-content__title flex a-e jc-s">Page Not Found</div>
                <div className="nf-content__content">
                    Sorry, the page you are looking for doesn't exist or has been moved.<br />
                    Please check the URL or return to the <a href="/">homepage</a>.
                </div>
            </div>
        </div>
    );
}

export default NotFound;