


let container = document.getElementById('container')

const homepage =()=>{
	window.location.href="index.html";
}

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)