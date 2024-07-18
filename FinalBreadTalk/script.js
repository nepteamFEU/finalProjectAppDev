document.addEventListener('DOMContentLoaded', () => {
    const wiggleImages = document.querySelectorAll('.wiggle');
    let currentIndex = 0;

    function wiggleNextImage() {
        // Reset all images to stop the animation
        wiggleImages.forEach(img => {
            img.style.animation = 'none';
        });

        // Apply wiggle animation to the current image
        wiggleImages[currentIndex].style.animation = 'wiggle 0.3s ease-in-out';

        // Move to the next image, wrapping around to the first image if necessary
        currentIndex = (currentIndex + 1) % wiggleImages.length;

        // Schedule the next wiggle
        setTimeout(wiggleNextImage, 1000); // Adjust timing as needed
    }

    // Start the wiggle sequence
    wiggleNextImage();
});
