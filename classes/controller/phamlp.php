<?php

	class Controller_PHamlP extends Controller {

		// TODO: Use cache & Response::send_file
		// TODO: Processing varies by environment setting
		public function action_sass ( $file ) {
			$this->response->headers( 'Content-Type', 'text/css' );


			$cfg = Kohana::config( 'phamlp' );

			// TODO: Better path safing, str_replace is weak sauce
			$path = $cfg->sass_path . str_replace( '..', '', $file );

			if( file_exists( $path ) ) {

				require_once Kohana::find_file('vendor', 'phamlp/Phamlp' );
				require_once Kohana::find_file('vendor', 'phamlp/sass/SassParser' );

				$sass = new SassParser();
				$this->response->body( $sass->toCss( $path ) );
			}
			else {
				$this->response->status( 404 );
				$this->response->body( '/* 404 - Not Found */' );
			}
		}

	}
