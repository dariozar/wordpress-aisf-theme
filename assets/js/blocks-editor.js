( function( wp ) {
	if ( ! wp || ! wp.hooks || ! wp.compose || ! wp.element || ! wp.blockEditor || ! wp.components ) {
		return;
	}

	var addFilter          = wp.hooks.addFilter;
	var createHigherOrder  = wp.compose.createHigherOrderComponent;
	var el                 = wp.element.createElement;
	var Fragment           = wp.element.Fragment;
	var InspectorControls  = wp.blockEditor.InspectorControls;
	var PanelBody          = wp.components.PanelBody;
	var SelectControl      = wp.components.SelectControl;
	var TextControl        = wp.components.TextControl;
	var TextareaControl    = wp.components.TextareaControl;
	var ToggleControl      = wp.components.ToggleControl;

	var withDocumentsListControls = createHigherOrder( function( BlockEdit ) {
		return function( props ) {
			if ( props.name !== 'aisf/documents-list' ) {
				return el( BlockEdit, props );
			}

			var attributes    = props.attributes || {};
			var setAttributes = props.setAttributes;

			var presetCategories = [
				{ label: 'Tutte le sezioni', value: '' },
				{ label: 'Statuto e Atto Fondativo', value: 'Statuto e Atto Fondativo' },
				{ label: 'Regolamenti', value: 'Regolamenti' },
				{ label: 'Piano Strategico', value: 'Piano Strategico' },
				{ label: 'Verbali', value: 'Verbali' },
			];

			var currentCat = attributes.category || '';
			var isCustomCat = currentCat !== '' && ! presetCategories.some( function( item ) {
				return item.value === currentCat;
			} );

			if ( isCustomCat ) {
				presetCategories.push( { label: currentCat + ' (personalizzata)', value: currentCat } );
			}

			return el(
				Fragment,
				{},
				el( BlockEdit, props ),
				el(
					InspectorControls,
					{},
					el(
						PanelBody,
						{ title: 'Impostazioni Elenco Documenti', initialOpen: true },
						el( SelectControl, {
							label: 'Sezione principale',
							value: currentCat,
							options: presetCategories,
							onChange: function( val ) {
								setAttributes( { category: val } );
							}
						} ),
						el( TextControl, {
							label: 'Nome sezione (personalizzabile)',
							help: 'Puoi scrivere qualsiasi nome di sezione personalizzato o lasciare quello selezionato sopra.',
							value: currentCat,
							onChange: function( val ) {
								setAttributes( { category: val } );
							}
						} ),
						el( ToggleControl, {
							label: 'Suddividi per anno accademico',
							help: 'Attivo per i Verbali (raggruppa i documenti per anno accademico, es. 2025/2026, in ordine decrescente).',
							checked: attributes.groupByYear !== false,
							onChange: function( val ) {
								setAttributes( { groupByYear: !! val } );
							}
						} ),
						el( ToggleControl, {
							label: 'Suddividi in sottosezioni a tendina',
							help: 'Mostra le sottosezioni come menù a tendina apribili sotto ciascun anno accademico.',
							checked: !! attributes.groupBySubsection,
							onChange: function( val ) {
								setAttributes( { groupBySubsection: !! val } );
							}
						} ),
						attributes.groupBySubsection && el( TextareaControl, {
							label: 'Titoli delle sottosezioni (modificabili)',
							help: 'Inserisci i titoli delle sottosezioni separati da virgola. Puoi rinominarli o aggiungerne di nuovi.',
							rows: 4,
							value: attributes.subsectionTitles || 'Videoconferenze del Comitato Esecutivo, Videoconferenze con i Comitati Locali, Assemblea Generale Annuale',
							onChange: function( val ) {
								setAttributes( { subsectionTitles: val } );
							}
						} ),
						attributes.groupBySubsection && el( ToggleControl, {
							label: 'Mostra sottosezioni anche se vuote',
							checked: attributes.showEmptySubsections !== false,
							onChange: function( val ) {
								setAttributes( { showEmptySubsections: !! val } );
							}
						} ),
						el( TextControl, {
							label: 'Filtra per singola sottosezione (opzionale)',
							help: 'Compila solo se vuoi che questo blocco mostri esclusivamente una sottosezione specifica (es. sotto un titolo H3 di Gutenberg).',
							value: attributes.subsection || '',
							onChange: function( val ) {
								setAttributes( { subsection: val } );
							}
						} )
					)
				)
			);
		};
	}, 'withDocumentsListControls' );

	addFilter(
		'editor.BlockEdit',
		'aisf/documents-list-inspector-controls',
		withDocumentsListControls
	);
} )( window.wp );

