<?php
/**
 * WPGraphQL test case (For Codeception)
 *
 * For testing WPGraphQL responses.
 * @since 1.0.0
 * @package Tests\WPGraphQL\TestCase
 */

namespace Tests\WPGraphQL\TestCase;

/**
 * WPGraphQLTestCase class.
 */
class WPGraphQLTestCase extends \Codeception\TestCase\WPTestCase {

	use WPGraphQLTestCommon;

	// Search operation enumerations.
	const MESSAGE_EQUALS      = 100;
	const MESSAGE_CONTAINS    = 200;
	const MESSAGE_STARTS_WITH = 300;
	const MESSAGE_ENDS_WITH   = 400;

	/**
	 * Console logging function.
	 *
	 * Use --debug flag to view in console.
	 */
	protected function logData( $data ) {
		if ( is_array( $data ) || is_object( $data ) ) {
			\codecept_debug( json_encode( $data, JSON_PRETTY_PRINT ) );
			return;
		}

		\codecept_debug( $data );
	}
}