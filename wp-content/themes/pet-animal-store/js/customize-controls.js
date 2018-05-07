( function( api ) {

	// Extends our custom "pet-animal-store" section.
	api.sectionConstructor['pet-animal-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );