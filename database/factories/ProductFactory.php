<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $imageClothes = [
            'https://www.emmawillis.com/cdn/shop/products/plain-sky-brushed-cotton-shirt-new-401737_600x600_crop_center.jpg?v=1663351450',
            'https://en.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-lvse-inside-out-t-shirt-ready-to-wear--HIY47WJYN686_PM2_Front%20view.jpg',
            'https://cdn.shopify.com/s/files/1/0603/7533/5145/products/7front2-small_ec509190-772d-437f-b5d7-ad2a69ee42a6.jpg?v=1649851198',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJmlvnj2jhHe1V4LtSHW6gXKhP182xIoq0SQ&usqp=CAU',
            'https://images.unsplash.com/photo-1621072156002-e2fccdc0b176?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2hpcnR8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'https://pyxis.nymag.com/v1/imgs/158/4ac/bf264c70e2a29ca711791f21184ff376ea-ayr-shirt.2x.rsquare.w600.png',
            'https://cdni.llbean.net/is/image/wim/211444_0_44?scl=2',
            'https://cdn.shopify.com/s/files/1/0266/6276/4597/products/300936535LTPINK_2_1024x1024.jpg?v=1681366488',
            'https://m.media-amazon.com/images/I/719QE399TwL._SY679_.jpg',
            'https://assets.ajio.com/medias/sys_master/root/20221017/mFgL/634cf8daaeb269659c479b8e/-473Wx593H-441149293-pink-MODEL.jpg',
            'https://assets.ajio.com/medias/sys_master/root/20220107/YKv5/61d73adaaeb2695cdd07720a/-1117Wx1400H-441129510-pink-MODEL.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cCqTztzwmmduErxMKvSFy1b1Bs4rL2v-jfnR_-rpBeMeHGJX3Y4HYtD1LlfGI2dxYtY&usqp=CAU',
            'https://images.meesho.com/images/products/61695345/pydou_512.webp',
            'https://www.politix.com.au/dw/image/v2/ABBA_PRD/on/demandware.static/-/Sites-politix-master-catalog/default/dwcf2dd408/images/hires/Winter%2021/B1/bp05-camel-1.jpg?sw=2500&sh=3000&sm=cut',
            'https://images.asos-media.com/products/asos-design-tapered-suit-pants-in-camel-tonic/21760045-1-camel?$n_640w$&wid=513&fit=constrain',
            'https://target.scene7.com/is/image/Target/GUEST_6eb2debb-90fd-4eef-bc23-cd8f1a9d5802',
            'https://cdn.shopify.com/s/files/1/1231/6442/products/M-PANTS-16181-20628-LBLUE_6.jpg?v=1674638598&width=1920',
            'https://cdn.shopify.com/s/files/1/1231/6442/products/M-PANTS-16350-20435-BLUE_7.jpg?v=1669968900',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuLR3_09yAMZDFL99AThu61J0Or2Ri3RmscQ&usqp=CAU',
            'https://cdn.shopify.com/s/files/1/0084/5365/2560/products/W231107-BLK_1238_900x.png?v=1675142444'
        ];

        $imageBook = [
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSizsT9rdJxlA4mzkYdPdvgqX9yi0e9wyEXDcop58LY-2lv6Gw&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSH_CV2acCRYxNtTVy2vbcszpZnYmYjFgGDbMdy5DyJShgp2WA&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcQ4TYmGjc1i9piffYBHFl5DYJQBJ7vSBfKxejc6tCje32cOQwnS&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSZfA69Ya_l2gnruPUe4tyVxxeWlopRZ6w-GzTKhVH3cg9Q998&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcRJzUSQYCya2C9nkrFQeAy3-Rkg4Yz-ezkJaYjcCwPxq9_q3aQ&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcTUn3DaEAjhIKYr1gJBE8ErPqd-p6YXI1Qc8LRn-8AReH9yfbU&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcR1tVZgkRL1pPZ4x4etZyUvSpjqMhsY3kJQbzhP1jZD2cELcKI&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSJQzW69nGuXgatKSiK_MtuP00s7GJUQeisiOA2aEIJ2iVqBAc&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcQ7tTe6bd3KV6ahdzfeqo-MMLfe2yCas8lGqB7b-4a460_CB4o&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSk8Gxr5GxjT5eUGRjLCrYL2VjJSo4ZS5O1nsRVMDqmGHal0QdI&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSSo8mQgIF7mlsvDtNBiNCLU4YejUAuG7kYnUeFDr7oFTfS02Ok&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcQPqJ1r3KkXAiJyIaSii3zR7JvFJ5Rmoa4tQ27anIRmOpjr-q0X&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcRq0DRhplUW7W6BM9q2M9OZ9rMl5jrdw9B29p5TVZbdjPuGGtVS&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSVM7kwlmn20dz3yR4md4BuN4myJLI-XLiPNmPF87PhbKoVRUI&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSoWKKJShqTuQAEZSOlrwXCmRztJIUCM8ncjknvUrdfPlCWpP8&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcQ1rTPCQDqK9DtdxUDo3biuhmB3djqRnDIIMrFDaGXobv3aU-w&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSKnYj32zh8pOaLm7C1g3obC88vaWlGBj1p-w1OY1Nss2t1LXSV&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcQXGs2RHwab_I2m1eAv0csoWFlnmXkqG_rwvVERA23gn4OgdEK7&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcQZhXqT7rMpvGMk4_wrW1gmi-Gs0ytimD6aVyyMJjHrN76_5y0&s',
            'http://t0.gstatic.com/images?q=tbn:ANd9GcSuMDxtJ64b8bjCNxkeTZi-9AXzWD4t1ABaSEUU3h-g8jPz9dnm&s',
        ];

        $imageSneaker = [
            'https://i.insider.com/60eefb33a8d8c00019b031be?width=700',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJgSwW242nBX-TBbCsJiXRfcUNJOAng1ziiiJXSF0XWJk4NzAkxr5m-PyY5eMj__wkG9k&usqp=CAU',
            'https://www.stitchfix.com/men/blog/wp-content/uploads/2021/07/sv_210382_hero_LD_MEN-v036-scaled.jpeg',
            'https://cdn.shopify.com/s/files/1/2995/0112/products/ul720vc1_2_grande.png?v=1630336055',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6VCUwRvaDyNF4DWbzc66DjMwfsQRzFUKnzKvaIDB_5WjC7ZcTOp6Fa4csZLvbVckgwg4&usqp=CAU',
            'https://www.jiomart.com/images/product/original/rv2dcclzkn/brown-fox-brown-fox-stylish-attractive-snekaers-shoes-for-man-s-boy-s-sneakers-for-men-white-product-images-rv2dcclzkn-0-202209241601.jpg?im=Resize=(500,630)',
            'https://rukminim2.flixcart.com/image/850/1000/xif0q/shoe/3/c/b/-original-imaghvb58zvq3gun.jpeg?q=20',
            'https://www.themanual.com/wp-content/uploads/sites/9/2020/07/best-sneakers.jpg?p=1',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnddqIyr1Vh64DXzDj4KuI95KoWvOM77_9zWgI3kkXRJW5UqnuKhpsM4_Wx3rfmfq_FfA&usqp=CAU',
            'https://i.ebayimg.com/images/g/5nsAAOSwVxljLTbi/s-l1600.jpg',
            'https://cdn.thewirecutter.com/wp-content/media/2021/02/whitesneakers-2048px-4187.jpg',
            'https://i.ebayimg.com/images/g/pIIAAOSwgrpkEYKG/s-l1600.jpg',
            'https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/19312894/2022/7/30/c4b9b60c-e83b-47d1-8033-291be7434fda1659171280101AfroJackWomenPinkColourblockedSneakers1.jpg',
            'https://ph-live-01.slatic.net/p/2ac57a4afcb89eee35edcbc041d536f8.jpg',
            'https://ae01.alicdn.com/kf/H151fde80a1464fb3b7a6d5377d904cae1.jpg_640x640Q90.jpg_.webp',
            'https://nypost.com/wp-content/uploads/sites/2/2022/03/4.jpg?quality=90&strip=all',
            'https://nypost.com/wp-content/uploads/sites/2/2022/03/4.jpg?quality=90&strip=all',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsal4JDtb1v2eXMDMD4MlNp7BvQGmfOrUWxjB2cw25yCkZ4PuU1bKXdhYjgsamiqZQZHU&usqp=CAU',
            'https://cdna.lystit.com/photos/jildorshoes/0caa1d8f/steven-by-steve-madden-White-Leather-Glazed-Sneaker-White-Black.jpeg',
            'https://media.karousell.com/media/photos/products/2023/1/30/styblack_sneakers_1675054119_d522084b_progressive.jpg',
        ];

        return [
            'name' => $this->faker->text(15),
            'description' => $this->faker->paragraph(5),
            'price' => rand(10, 100),
            'rating' => rand(1, 5),
            'category_id' => 3,
            'imageUrl' => $imageSneaker[rand(1, 19)],
        ];
    }
}
