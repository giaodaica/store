document.addEventListener("DOMContentLoaded", function () {
    // Khởi tạo Isotope
    const isotope = new Isotope(".gallery-wrapper", {
        itemSelector: ".element-item",
        layoutMode: "fitRows",
        transitionDuration: "0.4s"
    });

    // Object lưu trữ trạng thái lọc
    let filters = {
        category: ["*"],
        color: ["*"],
        gender: ["*"],
        size: ["*"],
        sizeSystem: ["*"],
        material: ["*"],
        price: ["*"],
        brand: ["*"],
        season: ["*"],
        style: ["*"],
        condition: ["*"]
    };

    // Debounce để tối ưu hiệu suất
    let timeout;
    function debounceFilter() {
        clearTimeout(timeout);
        timeout = setTimeout(applyFilter, 200);
    }

    // Hàm lọc
    function applyFilter() {
        isotope.arrange({
            filter: function (itemElement) {
                const categoryMatch = filters.category.includes("*") ||
                    filters.category.some(cat => itemElement.classList.contains(cat.replace(".", "")));
                const colorMatch = filters.color.includes("*") ||
                    filters.color.includes(itemElement.getAttribute("data-color"));
                const genderMatch = filters.gender.includes("*") ||
                    filters.gender.includes(itemElement.getAttribute("data-gender"));

                // Xử lý kích thước và hệ kích thước
                const sizeFull = itemElement.getAttribute("data-size-full");
                const sizeMatch = filters.size.includes("*") || filters.sizeSystem.includes("*") ||
                    filters.size.some(size => filters.sizeSystem.some(sys => `${sys}-${size}` === sizeFull));

                const materialMatch = filters.material.includes("*") ||
                    filters.material.includes(itemElement.getAttribute("data-material"));

                // Xử lý giá cả
                const price = parseFloat(itemElement.getAttribute("data-price"));
                let priceMatch = filters.price.includes("*");
                if (!priceMatch) {
                    priceMatch = filters.price.some(range => {
                        const [min, max] = range.split("-").map(Number);
                        return price >= min && (max ? price <= max : true);
                    });
                }

                const brandMatch = filters.brand.includes("*") ||
                    filters.brand.includes(itemElement.getAttribute("data-brand"));
                const seasonMatch = filters.season.includes("*") ||
                    filters.season.includes(itemElement.getAttribute("data-season"));
                const styleMatch = filters.style.includes("*") ||
                    filters.style.includes(itemElement.getAttribute("data-style"));
                const conditionMatch = filters.condition.includes("*") ||
                    filters.condition.includes(itemElement.getAttribute("data-condition"));

                return categoryMatch && colorMatch && genderMatch && sizeMatch && materialMatch &&
                    priceMatch && brandMatch && seasonMatch && styleMatch && conditionMatch;
            }
        });

        // Thông báo không có kết quả
        const visibleItems = isotope.getFilteredItemElements().length;
        const noResultMessage = document.querySelector(".no-result");
        if (visibleItems === 0 && noResultMessage) noResultMessage.style.display = "block";
        else if (noResultMessage) noResultMessage.style.display = "none";
    }

    // Hàm thiết lập bộ lọc cho checkbox
    function setupFilter(containerClass, filterType) {
        const container = document.querySelector(`.${containerClass}`);
        if (container) {
            container.addEventListener("change", function (e) {
                if (e.target.type === "checkbox") {
                    const checkboxes = container.querySelectorAll('input[type="checkbox"]');
                    const allCheckbox = container.querySelector('input[value="*"]');
                    const checkedValues = Array.from(checkboxes)
                        .filter(cb => cb.checked && cb.value !== "*")
                        .map(cb => cb.value);

                    if (e.target.value === "*" && e.target.checked) {
                        // Nếu chọn "All", bỏ chọn tất cả các ô khác
                        checkboxes.forEach(cb => {
                            if (cb.value !== "*") cb.checked = false;
                        });
                        filters[filterType] = ["*"];
                    } else if (e.target.value !== "*" && e.target.checked) {
                        // Nếu chọn một giá trị cụ thể, bỏ chọn "All"
                        allCheckbox.checked = false;
                        filters[filterType] = checkedValues.length > 0 ? checkedValues : ["*"];
                    } else if (!e.target.checked && checkedValues.length === 0) {
                        // Nếu không còn giá trị nào được chọn, chọn lại "All"
                        allCheckbox.checked = true;
                        filters[filterType] = ["*"];
                    } else {
                        filters[filterType] = checkedValues;
                    }

                    debounceFilter();
                }
            });
        }
    }

    // Thiết lập tất cả bộ lọc
    setupFilter("categories-filter", "category");
    setupFilter("color-filter", "color");
    setupFilter("gender-filter", "gender");
    setupFilter("size-filter", "size");
    setupFilter("size-system-filter", "sizeSystem");
    setupFilter("material-filter", "material");
    setupFilter("price-filter", "price");
    setupFilter("brand-filter", "brand");
    setupFilter("season-filter", "season");
    setupFilter("style-filter", "style");
    setupFilter("condition-filter", "condition");

    // Nút Reset
    document.querySelector("#reset-filters").addEventListener("click", function () {
        for (let key in filters) filters[key] = ["*"];
        document.querySelectorAll('.filter-group input[type="checkbox"]').forEach(cb => {
            cb.checked = cb.value === "*";
        });
        applyFilter();
    });

    // Áp dụng lọc ban đầu
    applyFilter();
});

// Khởi tạo GLightbox
document.addEventListener("DOMContentLoaded",
    function (e) { document.querySelector(".gallery-wrapper") && (t = new Isotope(".gallery-wrapper", { itemSelector: ".element-item", layoutMode: "fitRows" })); var t, r = document.querySelector(".categories-filter"), r = (r && r.addEventListener("click", function (e) { matchesSelector(e.target, "li a") && (e = e.target.getAttribute("data-filter")) && t.arrange({ filter: e }) }), document.querySelectorAll(".categories-filter")); r && Array.from(r).forEach(function (e) { var t; (t = e).addEventListener("click", function (e) { matchesSelector(e.target, "li a") && (t.querySelector(".active").classList.remove("active"), e.target.classList.add("active")) }) }) }); var lightbox = GLightbox({ selector: ".image-popup", title: !1 });
