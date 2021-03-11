document.addEventListener("readystatechange", (evt) => {
	if (evt.target.readyState === "complete") {
		 const html = document.querySelector("html")
		 const modal = document.querySelector("#mymodal")
		 const modalOverlay = document.querySelector("#mymodal-overlay")
		 const btnCloseModal = document.querySelector("#mybtn-close-modal")
		 const modalImage = document.querySelector("#img-modal")
		 const galleryImages = [...document.querySelectorAll("img.gallery-modal")]

		 galleryImages.map((img) => {
			  img.addEventListener("click", (evt) => {
					const src = evt.currentTarget.src
					modalImage.src = src
					modal.classList.add("modal-show")
					html.style.overflow = "hidden"
			  })
		 })

		 modalOverlay.addEventListener("click", () => {
			  modal.classList.remove("modal-show")
			  html.style.overflow = ""
		 })
		 btnCloseModal.addEventListener("click", () => {
			  modal.classList.remove("modal-show")
			  html.style.overflow = ""
		 })
	}
})