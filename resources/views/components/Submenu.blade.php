<div class="submenu hide" aria-hidden="true">
    <div>
        <div class="cont ">
            <div class="row">
                {{-- {categories.map((category, index) => {
                if (category.taxonomy === "CATEGORY") {
                var sub = categories.filter(cate => {
                return cate.taxonomy === "SUBCATEGORY" && cate.parent === category.term_taxonomy_id
                })
                return ( --}}
                {{-- <div class={"col-3"} key={category.term_taxonomy_id}>
                    <h3>
                        <a onClick={hide} href={"/" + category.slug}>
                            {category.name}
                        </a>
                    </h3>
                    {sub.length !== 0 &&
                    <ul>
                        {sub.map((subcate, subindex) => {
                        if (subindex < 5) { return ( <li key={subcate.subindex * 50}>
                            <a onClick={hide} href={"/" + category.slug + '/' + subcate.slug}>
                                {subcate.name}
                            </a>
                            </li>
                            )
                            }
                            })
                            }
                    </ul>
                    }
                </div> --}}
                {{-- )
                }
                })} --}}
            </div>
            <button class="hide_all_btn" onClick={hide}>Close <span>&#10006;</span></button>
        </div>
    </div>
</div>
