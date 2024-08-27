<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div <?php echo get_block_wrapper_attributes(); ?>>

	<div class="wfuk-stories-map-container">
				
		<div class="map-and-dots map-container-section">
			<img class="stories-map-white" src="https://wefeedtheuk.org/wp-content/plugins/wfuk-stories-map/assets/images/WFTUK-map-white.webp" />
			<div class="story-pins">
				<button class="open-modal location-one fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-two fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-three fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-four fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-five fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-six fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-seven fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-eight fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-nine fa fa-map-marker" style="font-size: var(--pin-size);"></button>
				<button class="open-modal location-ten fa fa-map-marker" style="font-size: var(--pin-size);"></button>
			</div>
		</div>
		<div class="dialog-container">
			<dialog id="modal-1" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/Sophie-Gerrard_Huntly_gallery.webp" />
					<h4>Cultivating Equality: Women Working with Scottish Land</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/cultivating-equality-women-working-with-land/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/cultivating-equality-women-working-with-land/#related-events">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>

			<dialog id="modal-2" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/Yvette-Monahan_looking-out-across-the-fields_gallery.webp" />
					<h4>Fibre: Nature-Friendly Flax Farming in Northern Ireland</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/fibre-nature-friendly-flax-farming/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/fibre-nature-friendly-flax-farming/#related-events">Events</a>
					</div>			
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>

			<dialog id="modal-3" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/Johannah-Churchill_trees-field_gallery.webp" />
					<h4>Down to Earth: Restoring soil in Northumberland</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/down-to-earth-restoring-soil/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/down-to-earth-restoring-soil/#related-events">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>	
			</dialog>

			<dialog id="modal-4" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/webres_Johannes-Pretorius-L1026055-l.jpg" />
					<h4>Agri-Culture: A Lineage of Hedgerow Ligging in Cumbria</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/agri-culture-a-lineage-of-hedgrow-ligging/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/agri-culture-a-lineage-of-hedgrow-ligging/#related-events">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>

			<dialog id="modal-5" class="modal-example">
				<div class="modal-content">			
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/webres_Aaron-Schuman_Fordhall-Farm-4.jpg" />
					<h4>From Crisis to Kinship: Healing People & Places in Shropshire</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="/stories/">Story</a>
						<a class="btn btn-events" href="/events/">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>					
				</div>
			</dialog>

			<dialog id="modal-6" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/Andy-Pilsbury_two-women-in-orchard_gallery.webp" />
					<h4>Custodians of the Land: Intergenerational Nature Restoration in Wales</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/custodians-of-the-land-intergenerational-nature-restoration/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/custodians-of-the-land-intergenerational-nature-restoration/#related-events">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>

			<dialog id="modal-7" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/Lua-Ribeira_baking_gallery.webp" />
					<h4>Grain Rebels: A Food Revolution Starts with Seed in the South West</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/grain-rebels-a-food-revolution-starts-with-seed/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/grain-rebels-a-food-revolution-starts-with-seed/#related-events">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>

			<dialog id="modal-8" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/Ayesha-Jones_hands-holding-soil-e1707148589369.webp" />
					<h4>No Diggity: Cooling our Climate in The Black Country</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="/stories/">Story</a>
						<a class="btn btn-events" href="/events/">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>

			<dialog id="modal-9" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/webres_Jon-Tonks_1469_11.jpg" />
					<h4>In Deep Water: Sustainable Fishing along the South Coast</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/in-deep-water-sustainable-fishing/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/in-deep-water-sustainable-fishing/#related-events">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>

			<dialog id="modal-10" class="modal-example">
				<div class="modal-content">
					<img src="https://wefeedtheuk.org/wp-content/uploads/2024/01/Arpita-Shah_Falcon-Fields-Allotment_gallery.webp" />
					<h4>Food Justice: Served Fresh from Urban Growers in London</h4>
					<div class="dialog-ctas">
						<a class="btn btn-story"href="https://wefeedtheuk.org/story/food-justice-served-fresh-from-community-farms/">Story</a>
						<a class="btn btn-events" href="https://wefeedtheuk.org/story/food-justice-served-fresh-from-community-farms/#related-events">Events</a>
					</div>
					<button class="close-modal fa fa-close"></button>
				</div>
			</dialog>
		</div>
	</div>

</div>
