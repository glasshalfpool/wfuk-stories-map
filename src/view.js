/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

/* eslint-disable no-console */
console.log( 'Hello World! (from create-block-wfuk-stories-map block)' );
/* eslint-enable no-console */

// Select all open modal buttons
const openModalButtons = document.querySelectorAll(".open-modal");

// Select all modals
const modals = document.querySelectorAll(".modal-example");

// Function to close all modals
function closeAllModals() {
  modals.forEach((modal) => {
    modal.close();
  });
}

// Iterate over each open button
openModalButtons.forEach((openButton, index) => {
  // Get the corresponding modal for the current open button
  const modal = modals[index];

  // Select the close button within the modal
  const closeModal = modal.querySelector(".close-modal");

  // Add click event listener to the open button to show the modal
  openButton.addEventListener("click", () => {
    closeAllModals(); // Close all modals before opening the selected one
    modal.show();
  });

  // Add click event listener to the close button to close the modal
  closeModal.addEventListener("click", () => {
    modal.close();
  });
});
