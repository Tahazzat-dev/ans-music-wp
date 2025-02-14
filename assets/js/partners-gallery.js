jQuery(document).ready(function ($) {
  // Update the gallery preview and textarea when an image is selected
  function updateGalleryPreview() {
    var imageUrls = $("#_customize-input-custom_gallery_images_control")
      .val()
      ?.split(",");
    var previewContainer = $(".custom-gallery-preview");
    previewContainer.empty(); // Clear previous previews

    // Loop through each URL and show preview
    imageUrls?.forEach(function (imageUrl) {
      imageUrl = imageUrl.trim(); // Remove leading/trailing spaces
      if (imageUrl) {
        var previewImage = $('<div class="gallery-image-preview"></div>')
          .append(
            '<img src="' +
              imageUrl +
              '" class="custom-gallery-thumbnail" alt="Gallery Image">'
          )
          .append('<button type="button" class="delete-image-btn">X</button>');

        // Append to the preview container
        previewContainer.append(previewImage);
      }
    });
  }

  // Show file selection dialog to select an image
  function openMediaLibrary() {
    var mediaFrame = wp.media({
      title: "Select or Upload Images",
      button: {
        text: "Add Images",
      },
      multiple: true,
    });

    // When images are selected, add them to the textarea
    mediaFrame.on("select", function () {
      let selectedImages = mediaFrame
        .state()
        .get("selection")
        .models.map(function (model) {
          return model.toJSON().url;
        });
      var currentImages = $(
        "#_customize-input-custom_gallery_images_control"
      ).val();
      if (currentImages) {
        selectedImages = currentImages.split(",").concat(selectedImages);
      }

      // Update the textarea with the new comma-separated URLs
      $("#_customize-input-custom_gallery_images_control").val(
        selectedImages.join(",")
      );

      // Trigger change event to notify the Customizer
      wp.customize("custom_gallery_images", function (value) {
        value.set(selectedImages.join(",")); // Update the Customizer setting
      });

      // Update the gallery preview
      updateGalleryPreview();
    });

    mediaFrame.open();
  }

  // Event listener for adding images (clicking the "Add Images" button)
  $("#customize-control-custom_gallery_images_control").prepend(`<div>
            <div class="custom-gallery-preview"></div>
            <button type="button" id="open-media-library" class="button">Add Images</button>
        </div>`);

  $("#open-media-library").on("click", function () {
    openMediaLibrary();
  });

  // Event listener for deleting images
  $(document).on("click", ".delete-image-btn", function () {
    var imageUrl = $(this).siblings("img").attr("src");
    var currentImages = $("#_customize-input-custom_gallery_images_control")
      .val()
      .split(",");

    // Remove the image URL from the list
    currentImages = currentImages.filter(function (url) {
      return url.trim() !== imageUrl;
    });

    // Update the textarea
    $("#_customize-input-custom_gallery_images_control").val(
      currentImages.join(",")
    );
    // Trigger change event to notify the Customizer
    wp.customize("custom_gallery_images", function (value) {
      value.set(currentImages.join(",")); // Update the Customizer setting
    });
    // Remove the preview image
    $(this).parent(".gallery-image-preview").remove();
  });

  // Initial gallery preview
  updateGalleryPreview();
});
