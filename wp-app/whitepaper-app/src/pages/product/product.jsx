import { use } from "react"
import "./product.css"
import { useParams } from "react-router-dom"

function Product(props)
{
    const {id} = useParams();
    return (
        <div className="product flex col p-2 ">
            <div className="product__info flex row">
                <div className="product-info__pic hf">
                    <img src="" alt={id} />
                </div>
                <div className="product-info__general p-4">
                    <div className="product-info-general__item">Author : </div>
                    <div className="product-info-general__item">Title : </div>
                    <div className="product-info-general__item">Category : </div>
                    <div className="product-info-general__item">Price : </div>
                    <div className="product-info-general__item">Amount : </div>
                </div>
            </div>
            <div className="product__description p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat porro voluptatem molestiae! Quis alias quas placeat, at sunt sapiente magnam itaque voluptatum! Sapiente alias saepe eius porro reprehenderit voluptas totam? Fugit maxime omnis unde eum totam quo rem saepe amet accusantium atque, maiores dolorum voluptates officiis ducimus. Sequi, distinctio consequuntur temporibus, commodi atque est inventore dolores assumenda enim animi vero reiciendis natus non odio. Possimus saepe quaerat excepturi nisi fuga soluta tenetur sint officia iste fugit, laborum ab magni nemo quod, esse est aliquid aperiam perspiciatis obcaecati ratione. Reprehenderit vel quas adipisci, tenetur vitae hic delectus sint repellendus cupiditate aliquid, nisi illo doloremque libero nam saepe nulla praesentium ratione iusto beatae aspernatur earum officia? Officia ullam temporibus, ad similique necessitatibus odit iste at itaque! Sed quidem ipsum animi nihil consequuntur harum officia reprehenderit nemo autem sunt ipsa, nostrum delectus repudiandae, et praesentium fugit? Adipisci temporibus mollitia aspernatur laboriosam in optio illum ducimus nesciunt consectetur, obcaecati eos sapiente, quas esse dolores ea delectus accusamus nihil repudiandae consequatur illo tempora maiores. Provident explicabo ipsam eveniet dolor iusto aperiam adipisci quod neque debitis, sint reprehenderit ipsum iste at? Odio deserunt molestiae doloribus aliquid et voluptatum tempore officia deleniti, optio animi quis, magni laboriosam! Corporis, quas. Fugit, quo itaque! Dolore voluptate consequatur aliquam nisi recusandae repellat magni officiis asperiores voluptatibus maxime accusamus soluta quo facilis excepturi quisquam dolor sit error molestiae, earum suscipit illum possimus. Sint dolore perferendis esse magni provident eligendi sed expedita asperiores nemo assumenda, tenetur exercitationem ipsa facere non dignissimos quaerat pariatur libero fugiat. Repellendus, voluptatem magni! Velit adipisci autem sequi rerum nemo obcaecati eligendi. Dignissimos voluptatem, nihil sapiente ea impedit quis ipsam itaque ad iste corrupti cumque vel illo nobis placeat quos quae magnam libero molestias deleniti ex obcaecati cupiditate assumenda est. Repellat consequuntur qui delectus explicabo quam odit earum doloremque? At, architecto quaerat! Aliquid, facere officia soluta natus dolor pariatur repellat provident maxime molestias illo. Ut et omnis illo culpa provident sed tempora deserunt amet voluptatibus sunt consequuntur quo, fugit iste. Magnam recusandae aut dicta natus, excepturi corrupti impedit laudantium quisquam esse eveniet, molestias nihil veritatis dolores aperiam saepe. Laboriosam minus consequatur porro dolorum praesentium sunt fugit at, sed facere vitae, blanditiis vel esse quibusdam, veniam deleniti reiciendis. Ullam labore corrupti veritatis rem recusandae optio voluptas aspernatur commodi modi maxime, quis, numquam ex omnis aliquid beatae, earum nam minus? Id aliquam rem reiciendis quibusdam eos saepe alias nulla non!</div>
        </div>
    )
}

export default Product;