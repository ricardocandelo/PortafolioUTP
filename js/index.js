
const videos = document.querySelectorAll('.video');
const containervid = document.querySelector('.container-video');
const videocontainer = document.querySelector('.video-show');

const imagen = document.querySelectorAll('.imagen');
const containerimg = document.querySelector('.container-imagen');
const imgcontainer = document.querySelector('.imagen-show');

//videos
videos.forEach(vid => {
    vid.addEventListener('click', () => {

        addVideo(vid.getAttribute('src'),vid.getAttribute('alt'));

        
    });
}); 

const addVideo = (src, alt) => {
    containervid.classList.toggle('move');
    videocontainer.src = src;

    
};


containervid.addEventListener('click', () => {
    containervid.classList.toggle('move');
    
});


//imagenes

imagen.forEach(img => {
    img.addEventListener('click', () => {

        addImg(img.getAttribute('src'),img.getAttribute('alt'));

        
    });
}); 

const addImg = (src, alt) => {
    containerimg.classList.toggle('move');
    imgcontainer.src = src;

    
};


containerimg.addEventListener('click', () => {
    containerimg.classList.toggle('move');
    
});