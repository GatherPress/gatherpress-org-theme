/**
 * Creates a distributable zip of the theme.
 *
 * Includes all theme files except those listed in .distignore.
 */

const { execSync } = require( 'child_process' );
const fs = require( 'fs' );
const path = require( 'path' );

const themeDir = path.resolve( __dirname, '..' );
const themeName = 'gatherpress-org-theme';
const zipFile = path.join( themeDir, `${ themeName }.zip` );

// Read .distignore patterns.
const distignorePath = path.join( themeDir, '.distignore' );
const distignorePatterns = fs.existsSync( distignorePath )
	? fs
			.readFileSync( distignorePath, 'utf8' )
			.split( '\n' )
			.map( ( line ) => line.trim() )
			.filter( ( line ) => line && ! line.startsWith( '#' ) )
	: [];

// Build exclude args for zip command.
const excludeArgs = distignorePatterns
	.map( ( pattern ) => `-x "${ themeName }/${ pattern }" -x "${ themeName }/${ pattern }/*"` )
	.join( ' ' );

// Remove old zip if it exists.
if ( fs.existsSync( zipFile ) ) {
	fs.unlinkSync( zipFile );
}

// Create zip from parent directory so the zip contains the theme folder.
const parentDir = path.dirname( themeDir );
const cmd = `cd "${ parentDir }" && zip -r "${ zipFile }" "${ themeName }" ${ excludeArgs }`;

console.log( `\nCreating ${ themeName }.zip... 🎁\n` );

try {
	execSync( cmd, { stdio: 'pipe' } );
	const stats = fs.statSync( zipFile );
	const sizeMB = ( stats.size / 1024 / 1024 ).toFixed( 2 );
	console.log( `Done. ${ themeName }.zip (${ sizeMB } MB) is ready! 🎉\n` );
} catch ( error ) {
	console.error( 'Failed to create zip:', error.message );
	process.exit( 1 );
}
