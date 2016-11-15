<?php

// Start of cairo v.0.3.2-beta

final class Cairo  {

	/**
	 * Retrives cairo's library version
	 * @link http://www.php.net/manual/en/cairo.version.php
	 * @return int Current Cairo library version integer
	 */
	public static function version () {}

	/**
	 * Retrieves cairo version as string
	 * @link http://www.php.net/manual/en/cairo.versionstring.php
	 * @return string Current Cairo library version string
	 */
	public static function versionString () {}

	/**
	 * Retrieves all available surfaces
	 * @link http://www.php.net/manual/en/cairo.availablesurfaces.php
	 * @return array A list-type array with all available surface backends.
	 */
	public static function availableSurfaces () {}

	/**
	 * Retrieves the availables font types
	 * @link http://www.php.net/manual/en/cairo.availablefonts.php
	 * @return array A list-type array with all available font backends.
	 */
	public static function availableFonts () {}

	/**
	 * Retrieves the current status as string
	 * @link http://www.php.net/manual/en/cairo.statustostring.php
	 * @param status int <p>
	 * A valid status code given by cairo_status or CairoContext::status
	 * </p>
	 * @return string A string containing the current status of a CairoContext object
	 */
	public static function statusToString ($status) {}

}

class CairoException extends Exception  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	final private function __clone () {}

	/**
	 * @param message[optional]
	 * @param code[optional]
	 * @param previous[optional]
	 */
	public function __construct ($message, $code, $previous) {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}

final class CairoStatus  {
	const SUCCESS = 0;
	const NO_MEMORY = 1;
	const INVALID_RESTORE = 2;
	const INVALID_POP_GROUP = 3;
	const NO_CURRENT_POINT = 4;
	const INVALID_MATRIX = 5;
	const INVALID_STATUS = 6;
	const NULL_POINTER = 7;
	const INVALID_STRING = 8;
	const INVALID_PATH_DATA = 9;
	const READ_ERROR = 10;
	const WRITE_ERROR = 11;
	const SURFACE_FINISHED = 12;
	const SURFACE_TYPE_MISMATCH = 13;
	const PATTERN_TYPE_MISMATCH = 14;
	const INVALID_CONTENT = 15;
	const INVALID_FORMAT = 16;
	const INVALID_VISUAL = 17;
	const FILE_NOT_FOUND = 18;
	const INVALID_DASH = 19;
	const INVALID_DSC_COMMENT = 20;
	const INVALID_INDEX = 21;
	const CLIP_NOT_REPRESENTABLE = 22;
	const TEMP_FILE_ERROR = 23;
	const INVALID_STRIDE = 24;
	const FONT_TYPE_MISMATCH = 25;
	const USER_FONT_IMMUTABLE = 26;
	const USER_FONT_ERROR = 27;
	const NEGATIVE_COUNT = 28;
	const INVALID_CLUSTERS = 29;
	const INVALID_SLANT = 30;
	const INVALID_WEIGHT = 31;

}

class CairoContext  {

	/**
	 * Creates a new CairoContext
	 * @link http://www.php.net/manual/en/cairocontext.construct.php
	 * @param surface
	 */
	public function __construct ($surface) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairocontext.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The save purpose
	 * @link http://www.php.net/manual/en/cairocontext.save.php
	 * @return void Description...
	 */
	public function save () {}

	/**
	 * The restore purpose
	 * @link http://www.php.net/manual/en/cairocontext.restore.php
	 * @return void Description...
	 */
	public function restore () {}

	/**
	 * The getTarget purpose
	 * @link http://www.php.net/manual/en/cairocontext.gettarget.php
	 * @return void Description...
	 */
	public function getTarget () {}

	/**
	 * The pushGroup purpose
	 * @link http://www.php.net/manual/en/cairocontext.pushgroup.php
	 * @return void Description...
	 */
	public function pushGroup () {}

	/**
	 * The pushGroupWithContent purpose
	 * @link http://www.php.net/manual/en/cairocontext.pushgroupwithcontent.php
	 * @param content string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function pushGroupWithContent ($content) {}

	/**
	 * The popGroup purpose
	 * @link http://www.php.net/manual/en/cairocontext.popgroup.php
	 * @return void Description...
	 */
	public function popGroup () {}

	/**
	 * The popGroupToSource purpose
	 * @link http://www.php.net/manual/en/cairocontext.popgrouptosource.php
	 * @return void Description...
	 */
	public function popGroupToSource () {}

	/**
	 * The getGroupTarget purpose
	 * @link http://www.php.net/manual/en/cairocontext.getgrouptarget.php
	 * @return void Description...
	 */
	public function getGroupTarget () {}

	/**
	 * The setSourceRGB purpose
	 * @link http://www.php.net/manual/en/cairocontext.setsourcergb.php
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setSourceRGB ($red, $green, $blue) {}

	/**
	 * The setSourceRGBA purpose
	 * @link http://www.php.net/manual/en/cairocontext.setsourcergba.php
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @param alpha string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setSourceRGBA ($red, $green, $blue, $alpha) {}

	/**
	 * The setSource purpose
	 * @link http://www.php.net/manual/en/cairocontext.setsource.php
	 * @param pattern string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setSource ($pattern) {}

	/**
	 * The setSourceSurface purpose
	 * @link http://www.php.net/manual/en/cairocontext.setsourcesurface.php
	 * @param surface string <p>
	 * Description...
	 * </p>
	 * @param x string[optional] <p>
	 * Description...
	 * </p>
	 * @param y string[optional] <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setSourceSurface ($surface, $x = null, $y = null) {}

	/**
	 * The getSource purpose
	 * @link http://www.php.net/manual/en/cairocontext.getsource.php
	 * @return void Description...
	 */
	public function getSource () {}

	/**
	 * The setAntialias purpose
	 * @link http://www.php.net/manual/en/cairocontext.setantialias.php
	 * @param antialias string[optional] <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setAntialias ($antialias = null) {}

	/**
	 * Retrives the current antialias mode
	 * @link http://www.php.net/manual/en/cairocontext.getantialias.php
	 * @return int The current CairoAntialias mode.
	 */
	public function getAntialias () {}

	/**
	 * The setDash purpose
	 * @link http://www.php.net/manual/en/cairocontext.setdash.php
	 * @param dashes string <p>
	 * Description...
	 * </p>
	 * @param offset string[optional] <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDash ($dashes, $offset = null) {}

	/**
	 * The getDashCount purpose
	 * @link http://www.php.net/manual/en/cairocontext.getdashcount.php
	 * @return int Description...
	 */
	public function getDashCount () {}

	/**
	 * The getDash purpose
	 * @link http://www.php.net/manual/en/cairocontext.getdash.php
	 * @return array Description...
	 */
	public function getDash () {}

	/**
	 * The setFillRule purpose
	 * @link http://www.php.net/manual/en/cairocontext.setfillrule.php
	 * @param setting string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFillRule ($setting) {}

	/**
	 * The getFillRule purpose
	 * @link http://www.php.net/manual/en/cairocontext.getfillrule.php
	 * @return int Description...
	 */
	public function getFillRule () {}

	/**
	 * The setLineCap purpose
	 * @link http://www.php.net/manual/en/cairocontext.setlinecap.php
	 * @param setting string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setLineCap ($setting) {}

	/**
	 * The getLineCap purpose
	 * @link http://www.php.net/manual/en/cairocontext.getlinecap.php
	 * @return int Description...
	 */
	public function getLineCap () {}

	/**
	 * The setLineJoin purpose
	 * @link http://www.php.net/manual/en/cairocontext.setlinejoin.php
	 * @param setting string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setLineJoin ($setting) {}

	/**
	 * The getLineJoin purpose
	 * @link http://www.php.net/manual/en/cairocontext.getlinejoin.php
	 * @return int Description...
	 */
	public function getLineJoin () {}

	/**
	 * The setLineWidth purpose
	 * @link http://www.php.net/manual/en/cairocontext.setlinewidth.php
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setLineWidth ($width) {}

	/**
	 * The getLineWidth purpose
	 * @link http://www.php.net/manual/en/cairocontext.getlinewidth.php
	 * @return float Description...
	 */
	public function getLineWidth () {}

	/**
	 * The setMiterLimit purpose
	 * @link http://www.php.net/manual/en/cairocontext.setmiterlimit.php
	 * @param limit string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMiterLimit ($limit) {}

	/**
	 * The getMiterLimit purpose
	 * @link http://www.php.net/manual/en/cairocontext.getmiterlimit.php
	 * @return float Description...
	 */
	public function getMiterLimit () {}

	/**
	 * The setOperator purpose
	 * @link http://www.php.net/manual/en/cairocontext.setoperator.php
	 * @param setting string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setOperator ($setting) {}

	/**
	 * The getOperator purpose
	 * @link http://www.php.net/manual/en/cairocontext.getoperator.php
	 * @return int Description...
	 */
	public function getOperator () {}

	/**
	 * The setTolerance purpose
	 * @link http://www.php.net/manual/en/cairocontext.settolerance.php
	 * @param tolerance string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setTolerance ($tolerance) {}

	/**
	 * The getTolerance purpose
	 * @link http://www.php.net/manual/en/cairocontext.gettolerance.php
	 * @return float Description...
	 */
	public function getTolerance () {}

	/**
	 * Establishes a new clip region
	 * @link http://www.php.net/manual/en/cairocontext.clip.php
	 * @return void 
	 */
	public function clip () {}

	public function inClip () {}

	/**
	 * Establishes a new clip region from the current clip
	 * @link http://www.php.net/manual/en/cairocontext.clippreserve.php
	 * @return void 
	 */
	public function clipPreserve () {}

	/**
	 * The resetClip purpose
	 * @link http://www.php.net/manual/en/cairocontext.resetclip.php
	 * @return void Description...
	 */
	public function resetClip () {}

	/**
	 * Computes the area inside the current clip
	 * @link http://www.php.net/manual/en/cairocontext.clipextents.php
	 * @return array An array containing the (float)x1, (float)y1, (float)x2, (float)y2, coordinates covering the area inside the current clip
	 */
	public function clipExtents () {}

	/**
	 * Retrieves the current clip as a list of rectangles
	 * @link http://www.php.net/manual/en/cairocontext.cliprectanglelist.php
	 * @return array An array of user-space represented rectangles for the current clip
	 * </p>
	 * <p>
	 * (The status in the list may be CAIRO_STATUS_CLIP_NOT_REPRESENTABLE to indicate that the clip
	 * region cannot be represented as a list of user-space rectangles.
	 * The status may have other values to indicate other errors.)
	 */
	public function clipRectangleList () {}

	/**
	 * Fills the current path
	 * @link http://www.php.net/manual/en/cairocontext.fill.php
	 * @return void 
	 */
	public function fill () {}

	/**
	 * Fills and preserve the current path
	 * @link http://www.php.net/manual/en/cairocontext.fillpreserve.php
	 * @return void 
	 */
	public function fillPreserve () {}

	/**
	 * Computes the filled area
	 * @link http://www.php.net/manual/en/cairocontext.fillextents.php
	 * @return array An array with the coordinates of the afected area
	 */
	public function fillExtents () {}

	/**
	 * The inFill purpose
	 * @link http://www.php.net/manual/en/cairocontext.infill.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return bool Description...
	 */
	public function inFill ($x, $y) {}

	/**
	 * The mask purpose
	 * @link http://www.php.net/manual/en/cairocontext.mask.php
	 * @param pattern string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function mask ($pattern) {}

	/**
	 * The maskSurface purpose
	 * @link http://www.php.net/manual/en/cairocontext.masksurface.php
	 * @param surface string <p>
	 * Description...
	 * </p>
	 * @param x string[optional] <p>
	 * Description...
	 * </p>
	 * @param y string[optional] <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function maskSurface ($surface, $x = null, $y = null) {}

	/**
	 * The paint purpose
	 * @link http://www.php.net/manual/en/cairocontext.paint.php
	 * @return void Description...
	 */
	public function paint () {}

	/**
	 * The paintWithAlpha purpose
	 * @link http://www.php.net/manual/en/cairocontext.paintwithalpha.php
	 * @param alpha string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function paintWithAlpha ($alpha) {}

	/**
	 * The stroke purpose
	 * @link http://www.php.net/manual/en/cairocontext.stroke.php
	 * @return void Description...
	 */
	public function stroke () {}

	/**
	 * The strokePreserve purpose
	 * @link http://www.php.net/manual/en/cairocontext.strokepreserve.php
	 * @return void Description...
	 */
	public function strokePreserve () {}

	/**
	 * The strokeExtents purpose
	 * @link http://www.php.net/manual/en/cairocontext.strokeextents.php
	 * @return array Description...
	 */
	public function strokeExtents () {}

	/**
	 * The inStroke purpose
	 * @link http://www.php.net/manual/en/cairocontext.instroke.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return bool Description...
	 */
	public function inStroke ($x, $y) {}

	/**
	 * Emits the current page
	 * @link http://www.php.net/manual/en/cairocontext.copypage.php
	 * @return void 
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairocontext.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	/**
	 * The translate purpose
	 * @link http://www.php.net/manual/en/cairocontext.translate.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function translate ($x, $y) {}

	/**
	 * The scale purpose
	 * @link http://www.php.net/manual/en/cairocontext.scale.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function scale ($x, $y) {}

	/**
	 * The rotate purpose
	 * @link http://www.php.net/manual/en/cairocontext.rotate.php
	 * @param angle string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function rotate ($angle) {}

	/**
	 * The transform purpose
	 * @link http://www.php.net/manual/en/cairocontext.transform.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function transform ($matrix) {}

	/**
	 * The setMatrix purpose
	 * @link http://www.php.net/manual/en/cairocontext.setmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMatrix ($matrix) {}

	/**
	 * The getMatrix purpose
	 * @link http://www.php.net/manual/en/cairocontext.getmatrix.php
	 * @return void Description...
	 */
	public function getMatrix () {}

	/**
	 * The identityMatrix purpose
	 * @link http://www.php.net/manual/en/cairocontext.identitymatrix.php
	 * @return void Description...
	 */
	public function identityMatrix () {}

	/**
	 * The userToDevice purpose
	 * @link http://www.php.net/manual/en/cairocontext.usertodevice.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function userToDevice ($x, $y) {}

	/**
	 * The userToDeviceDistance purpose
	 * @link http://www.php.net/manual/en/cairocontext.usertodevicedistance.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function userToDeviceDistance ($x, $y) {}

	/**
	 * Transform a coordinate
	 * @link http://www.php.net/manual/en/cairocontext.devicetouser.php
	 * @param x float <p>
	 * x value of the coordinate
	 * </p>
	 * @param y float <p>
	 * y value of the coordinate
	 * </p>
	 * @return array An array containing the x and y coordinates in the user-space
	 */
	public function deviceToUser ($x, $y) {}

	/**
	 * Transform a distance
	 * @link http://www.php.net/manual/en/cairocontext.devicetouserdistance.php
	 * @param x float <p>
	 * X component of a distance vector
	 * </p>
	 * @param y float <p>
	 * Y component of a distance vector
	 * </p>
	 * @return array an array with the x and y values of a distance vector in the user-space
	 */
	public function deviceToUserDistance ($x, $y) {}

	/**
	 * Creates a copy of the current path
	 * @link http://www.php.net/manual/en/cairocontext.copypath.php
	 * @return CairoPath A copy of the current CairoPath in the context
	 */
	public function copyPath () {}

	/**
	 * Gets a flattened copy of the current path
	 * @link http://www.php.net/manual/en/cairocontext.copypathflat.php
	 * @return CairoPath A copy of the current path
	 */
	public function copyPathFlat () {}

	/**
	 * Appends a path to current path
	 * @link http://www.php.net/manual/en/cairocontext.appendpath.php
	 * @param path CairoPath <p>
	 * CairoPath object
	 * </p>
	 * @return void 
	 */
	public function appendPath (CairoPath $path) {}

	/**
	 * The hasCurrentPoint purpose
	 * @link http://www.php.net/manual/en/cairocontext.hascurrentpoint.php
	 * @return bool Whether a current point is defined
	 */
	public function hasCurrentPoint () {}

	/**
	 * The getCurrentPoint purpose
	 * @link http://www.php.net/manual/en/cairocontext.getcurrentpoint.php
	 */
	public function getCurrentPoint () {}

	/**
	 * The newPath purpose
	 * @link http://www.php.net/manual/en/cairocontext.newpath.php
	 * @return void 
	 */
	public function newPath () {}

	/**
	 * The newSubPath purpose
	 * @link http://www.php.net/manual/en/cairocontext.newsubpath.php
	 * @return void Description...
	 */
	public function newSubPath () {}

	/**
	 * Closes the current path
	 * @link http://www.php.net/manual/en/cairocontext.closepath.php
	 * @return void 
	 */
	public function closePath () {}

	/**
	 * Adds a circular arc
	 * @link http://www.php.net/manual/en/cairocontext.arc.php
	 * @param x float <p>
	 * x position
	 * </p>
	 * @param y float <p>
	 * y position
	 * </p>
	 * @param radius float <p>
	 * Radius of the arc
	 * </p>
	 * @param angle1 float <p>
	 * start angle
	 * </p>
	 * @param angle2 float <p>
	 * end angle
	 * </p>
	 * @return void 
	 */
	public function arc ($x, $y, $radius, $angle1, $angle2) {}

	/**
	 * Adds a negative arc
	 * @link http://www.php.net/manual/en/cairocontext.arcnegative.php
	 * @param x float <p>
	 * double x position
	 * </p>
	 * @param y float <p>
	 * double y position
	 * </p>
	 * @param radius float <p>
	 * The radius of the desired negative arc
	 * </p>
	 * @param angle1 float <p>
	 * Start angle of the arc
	 * </p>
	 * @param angle2 float <p>
	 * End angle of the arc
	 * </p>
	 * @return void 
	 */
	public function arcNegative ($x, $y, $radius, $angle1, $angle2) {}

	/**
	 * Adds a curve
	 * @link http://www.php.net/manual/en/cairocontext.curveto.php
	 * @param x1 float <p>
	 * First control point in the x axis for the curve
	 * </p>
	 * @param y1 float <p>
	 * First control point in the y axis for the curve
	 * </p>
	 * @param x2 float <p>
	 * Second control point in x axis for the curve
	 * </p>
	 * @param y2 float <p>
	 * Second control point in y axis for the curve
	 * </p>
	 * @param x3 float <p>
	 * Final point in the x axis for the curve
	 * </p>
	 * @param y3 float <p>
	 * Final point in the y axis for the curve
	 * </p>
	 * @return void 
	 */
	public function curveTo ($x1, $y1, $x2, $y2, $x3, $y3) {}

	/**
	 * The lineTo purpose
	 * @link http://www.php.net/manual/en/cairocontext.lineto.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function lineTo ($x, $y) {}

	/**
	 * The moveTo purpose
	 * @link http://www.php.net/manual/en/cairocontext.moveto.php
	 * @param x string <p>
	 * The x coordinate of the new position.
	 * </p>
	 * @param y string <p>
	 * The y coordinate of the new position
	 * </p>
	 * @return void 
	 */
	public function moveTo ($x, $y) {}

	/**
	 * The rectangle purpose
	 * @link http://www.php.net/manual/en/cairocontext.rectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function rectangle ($x, $y, $width, $height) {}

	/**
	 * The glyphPath purpose
	 * @link http://www.php.net/manual/en/cairocontext.glyphpath.php
	 * @param glyphs
	 */
	public function glyphPath (array $glyphs) {}

	/**
	 * The textPath purpose
	 * @link http://www.php.net/manual/en/cairocontext.textpath.php
	 * @param string
	 */
	public function textPath ($string) {}

	/**
	 * The relCurveTo purpose
	 * @link http://www.php.net/manual/en/cairocontext.relcurveto.php
	 * @param x1 string <p>
	 * Description...
	 * </p>
	 * @param y1 string <p>
	 * Description...
	 * </p>
	 * @param x2 string <p>
	 * Description...
	 * </p>
	 * @param y2 string <p>
	 * Description...
	 * </p>
	 * @param x3 string <p>
	 * Description...
	 * </p>
	 * @param y3 string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function relCurveTo ($x1, $y1, $x2, $y2, $x3, $y3) {}

	/**
	 * The relLineTo purpose
	 * @link http://www.php.net/manual/en/cairocontext.rellineto.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function relLineTo ($x, $y) {}

	/**
	 * The relMoveTo purpose
	 * @link http://www.php.net/manual/en/cairocontext.relmoveto.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function relMoveTo ($x, $y) {}

	/**
	 * The pathExtents purpose
	 * @link http://www.php.net/manual/en/cairocontext.pathextents.php
	 * @return array Description...
	 */
	public function pathExtents () {}

	/**
	 * The selectFontFace purpose
	 * @link http://www.php.net/manual/en/cairocontext.selectfontface.php
	 * @param family string <p>
	 * Description...
	 * </p>
	 * @param slant string[optional] <p>
	 * Description...
	 * </p>
	 * @param weight string[optional] <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function selectFontFace ($family, $slant = null, $weight = null) {}

	/**
	 * The setFontSize purpose
	 * @link http://www.php.net/manual/en/cairocontext.setfontsize.php
	 * @param size string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFontSize ($size) {}

	/**
	 * The setFontMatrix purpose
	 * @link http://www.php.net/manual/en/cairocontext.setfontmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFontMatrix ($matrix) {}

	/**
	 * The getFontMatrix purpose
	 * @link http://www.php.net/manual/en/cairocontext.getfontmatrix.php
	 * @return void Description...
	 */
	public function getFontMatrix () {}

	/**
	 * The setFontOptions purpose
	 * @link http://www.php.net/manual/en/cairocontext.setfontoptions.php
	 * @param fontoptions string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFontOptions ($fontoptions) {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairocontext.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The setFontFace purpose
	 * @link http://www.php.net/manual/en/cairocontext.setfontface.php
	 * @param fontface CairoFontFace <p>
	 * A CairoFontFace object
	 * </p>
	 * @return void No value is returned
	 */
	public function setFontFace (CairoFontFace $fontface) {}

	/**
	 * The getFontFace purpose
	 * @link http://www.php.net/manual/en/cairocontext.getfontface.php
	 * @return void Description...
	 */
	public function getFontFace () {}

	/**
	 * The setScaledFont purpose
	 * @link http://www.php.net/manual/en/cairocontext.setscaledfont.php
	 * @param scaledfont string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setScaledFont ($scaledfont) {}

	/**
	 * The getScaledFont purpose
	 * @link http://www.php.net/manual/en/cairocontext.getscaledfont.php
	 * @return void Description...
	 */
	public function getScaledFont () {}

	/**
	 * The showText purpose
	 * @link http://www.php.net/manual/en/cairocontext.showtext.php
	 * @param text string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function showText ($text) {}

	/**
	 * Get the font extents
	 * @link http://www.php.net/manual/en/cairocontext.fontextents.php
	 * @return array An array containing the font extents for the current font.
	 */
	public function fontExtents () {}

	/**
	 * The textExtents purpose
	 * @link http://www.php.net/manual/en/cairocontext.textextents.php
	 * @param text string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function textExtents ($text) {}

}

final class CairoAntialias  {
	const MODE_DEFAULT = 0;
	const MODE_NONE = 1;
	const MODE_GRAY = 2;
	const MODE_SUBPIXEL = 3;

}

final class CairoSubpixelOrder  {
	const ORDER_DEFAULT = 0;
	const ORDER_RGB = 1;
	const ORDER_BGR = 2;
	const ORDER_VRGB = 3;
	const ORDER_VBGR = 4;

}

final class CairoFillRule  {
	const WINDING = 0;
	const EVEN_ODD = 1;

}

final class CairoLineCap  {
	const BUTT = 0;
	const ROUND = 1;
	const SQUARE = 2;

}

final class CairoLineJoin  {
	const MITER = 0;
	const ROUND = 1;
	const BEVEL = 2;

}

final class CairoOperator  {
	const CLEAR = 0;
	const SOURCE = 1;
	const OVER = 2;
	const IN = 3;
	const OUT = 4;
	const ATOP = 5;
	const DEST = 6;
	const DEST_OVER = 7;
	const DEST_IN = 8;
	const DEST_OUT = 9;
	const DEST_ATOP = 10;
	const XOR = 11;
	const ADD = 12;
	const SATURATE = 13;
	const MULTIPLY = 14;
	const SCREEN = 15;
	const OVERLAY = 16;
	const DARKEN = 17;
	const LIGHTEN = 18;
	const COLOR_DODGE = 19;
	const COLOR_BURN = 20;
	const HARD_LIGHT = 21;
	const SOFT_LIGHT = 22;
	const DIFFERENCE = 23;
	const EXCLUSION = 24;
	const HSL_HUE = 25;
	const HSL_SATURATION = 26;
	const HSL_COLOR = 27;
	const HSL_LUMINOSITY = 28;

}

class CairoMatrix  {

	/**
	 * Creates a new CairoMatrix object
	 * @link http://www.php.net/manual/en/cairomatrix.construct.php
	 * @param xx float[optional] <p>
	 * xx component of the affine transformation 
	 * </p>
	 * @param yx float[optional] <p>
	 * yx component of the affine transformation 
	 * </p>
	 * @param xy float[optional] <p>
	 * xy component of the affine transformation
	 * </p>
	 * @param yy float[optional] <p>
	 * yy component of the affine transformation
	 * </p>
	 * @param x0 float[optional] <p>
	 * X translation component of the affine transformation 
	 * </p>
	 * @param y0 float[optional] <p>
	 * Y translation component of the affine transformation 
	 * </p>
	 * @return float a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
	 */
	public function __construct ($xx = null, $yx = null, $xy = null, $yy = null, $x0 = null, $y0 = null) {}

	/**
	 * Creates a new identity matrix
	 * @link http://www.php.net/manual/en/cairomatrix.initidentity.php
	 * @return void a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
	 */
	public static function initIdentity () {}

	/**
	 * Creates a new translation matrix
	 * @link http://www.php.net/manual/en/cairomatrix.inittranslate.php
	 * @param tx float <p>
	 * amount to translate in the X direction 
	 * </p>
	 * @param ty float <p>
	 * amount to translate in the Y direction 
	 * </p>
	 * @return void a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
	 */
	public static function initTranslate ($tx, $ty) {}

	/**
	 * Creates a new scaling matrix
	 * @link http://www.php.net/manual/en/cairomatrix.initscale.php
	 * @param sx float <p>
	 * scale factor in the X direction 
	 * </p>
	 * @param sy float <p>
	 * scale factor in the Y direction 
	 * </p>
	 * @return void a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
	 */
	public static function initScale ($sx, $sy) {}

	/**
	 * Creates a new rotated matrix
	 * @link http://www.php.net/manual/en/cairomatrix.initrotate.php
	 * @param radians float <p>
	 * angle of rotation, in radians. The direction of rotation is defined such
	 * that positive angles rotate in the direction from the positive X axis
	 * toward the positive Y axis. With the default axis orientation of cairo,
	 * positive angles rotate in a clockwise direction. 
	 * </p>
	 * @return void a new CairoMatrix object that can be used with surfaces, contexts, and patterns.
	 */
	public static function initRotate ($radians) {}

	/**
	 * The translate purpose
	 * @link http://www.php.net/manual/en/cairomatrix.translate.php
	 * @param tx string <p>
	 * Description...
	 * </p>
	 * @param ty string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function translate ($tx, $ty) {}

	/**
	 * Applies scaling to a matrix
	 * @link http://www.php.net/manual/en/cairomatrix.scale.php
	 * @param sx float <p>
	 * scale factor in the X direction 
	 * </p>
	 * @param sy float <p>
	 * scale factor in the Y direction 
	 * </p>
	 * @return void 
	 */
	public function scale ($sx, $sy) {}

	/**
	 * The rotate purpose
	 * @link http://www.php.net/manual/en/cairomatrix.rotate.php
	 * @param sx string <p>
	 * Description...
	 * </p>
	 * @param sy string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function rotate ($sx, $sy) {}

	/**
	 * The invert purpose
	 * @link http://www.php.net/manual/en/cairomatrix.invert.php
	 * @return void Description...
	 */
	public function invert () {}

	/**
	 * The multiply purpose
	 * @link http://www.php.net/manual/en/cairomatrix.multiply.php
	 * @param matrix1 CairoMatrix <p>
	 * Description...
	 * </p>
	 * @param matrix2 CairoMatrix <p>
	 * Description...
	 * </p>
	 * @return CairoMatrix Description...
	 */
	public static function multiply (CairoMatrix $matrix1, CairoMatrix $matrix2) {}

	/**
	 * The transformDistance purpose
	 * @link http://www.php.net/manual/en/cairomatrix.transformdistance.php
	 * @param dx string <p>
	 * Description...
	 * </p>
	 * @param dy string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function transformDistance ($dx, $dy) {}

	/**
	 * The transformPoint purpose
	 * @link http://www.php.net/manual/en/cairomatrix.transformpoint.php
	 * @param dx string <p>
	 * Description...
	 * </p>
	 * @param dy string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function transformPoint ($dx, $dy) {}

}

class CairoPattern  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairopattern.construct.php
	 */
	public function __construct () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairopattern.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairopattern.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The getMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.getmatrix.php
	 * @return void Description...
	 */
	public function getMatrix () {}

	/**
	 * The setMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.setmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMatrix ($matrix) {}

}

class CairoGradientPattern extends CairoPattern  {

	/**
	 * The addColorStopRgb purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.addcolorstoprgb.php
	 * @param offset string <p>
	 * Description...
	 * </p>
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function addColorStopRgb ($offset, $red, $green, $blue) {}

	/**
	 * The addColorStopRgba purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.addcolorstoprgba.php
	 * @param offset string <p>
	 * Description...
	 * </p>
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @param alpha string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function addColorStopRgba ($offset, $red, $green, $blue, $alpha) {}

	/**
	 * The getColorStopRgba purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getcolorstoprgba.php
	 * @param index string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function getColorStopRgba ($index) {}

	/**
	 * The getColorStopCount purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getcolorstopcount.php
	 * @return int Description...
	 */
	public function getColorStopCount () {}

	/**
	 * The getExtend purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getextend.php
	 * @return int Description...
	 */
	public function getExtend () {}

	/**
	 * The setExtend purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.setextend.php
	 * @param extend int <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setExtend ($extend) {}

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairopattern.construct.php
	 */
	public function __construct () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairopattern.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairopattern.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The getMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.getmatrix.php
	 * @return void Description...
	 */
	public function getMatrix () {}

	/**
	 * The setMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.setmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMatrix ($matrix) {}

}

class CairoSolidPattern extends CairoPattern  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairosolidpattern.construct.php
	 * @param red
	 * @param green
	 * @param blue
	 * @param alpha[optional]
	 */
	public function __construct ($red, $green, $blue, $alpha) {}

	/**
	 * The getRgba purpose
	 * @link http://www.php.net/manual/en/cairosolidpattern.getrgba.php
	 * @return array Description...
	 */
	public function getRgba () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairopattern.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairopattern.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The getMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.getmatrix.php
	 * @return void Description...
	 */
	public function getMatrix () {}

	/**
	 * The setMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.setmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMatrix ($matrix) {}

}

class CairoSurfacePattern extends CairoPattern  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairosurfacepattern.construct.php
	 * @param surface
	 */
	public function __construct ($surface) {}

	/**
	 * The getSurface purpose
	 * @link http://www.php.net/manual/en/cairosurfacepattern.getsurface.php
	 * @return void Description...
	 */
	public function getSurface () {}

	/**
	 * The setFilter purpose
	 * @link http://www.php.net/manual/en/cairosurfacepattern.setfilter.php
	 * @param filter string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFilter ($filter) {}

	/**
	 * The getFilter purpose
	 * @link http://www.php.net/manual/en/cairosurfacepattern.getfilter.php
	 * @return int Description...
	 */
	public function getFilter () {}

	/**
	 * The setExtend purpose
	 * @link http://www.php.net/manual/en/cairosurfacepattern.setextend.php
	 * @param extend int <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setExtend ($extend) {}

	/**
	 * The getExtend purpose
	 * @link http://www.php.net/manual/en/cairosurfacepattern.getextend.php
	 * @return int Description...
	 */
	public function getExtend () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairopattern.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairopattern.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The getMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.getmatrix.php
	 * @return void Description...
	 */
	public function getMatrix () {}

	/**
	 * The setMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.setmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMatrix ($matrix) {}

}

class CairoLinearGradient extends CairoGradientPattern  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairolineargradient.construct.php
	 * @param x0
	 * @param y0
	 * @param x1
	 * @param y1
	 */
	public function __construct ($x0, $y0, $x1, $y1) {}

	/**
	 * The getPoints purpose
	 * @link http://www.php.net/manual/en/cairolineargradient.getpoints.php
	 * @return array Description...
	 */
	public function getPoints () {}

	/**
	 * The addColorStopRgb purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.addcolorstoprgb.php
	 * @param offset string <p>
	 * Description...
	 * </p>
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function addColorStopRgb ($offset, $red, $green, $blue) {}

	/**
	 * The addColorStopRgba purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.addcolorstoprgba.php
	 * @param offset string <p>
	 * Description...
	 * </p>
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @param alpha string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function addColorStopRgba ($offset, $red, $green, $blue, $alpha) {}

	/**
	 * The getColorStopRgba purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getcolorstoprgba.php
	 * @param index string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function getColorStopRgba ($index) {}

	/**
	 * The getColorStopCount purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getcolorstopcount.php
	 * @return int Description...
	 */
	public function getColorStopCount () {}

	/**
	 * The getExtend purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getextend.php
	 * @return int Description...
	 */
	public function getExtend () {}

	/**
	 * The setExtend purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.setextend.php
	 * @param extend int <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setExtend ($extend) {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairopattern.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairopattern.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The getMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.getmatrix.php
	 * @return void Description...
	 */
	public function getMatrix () {}

	/**
	 * The setMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.setmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMatrix ($matrix) {}

}

class CairoRadialGradient extends CairoGradientPattern  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairoradialgradient.construct.php
	 * @param x0
	 * @param y0
	 * @param r0
	 * @param x1
	 * @param y1
	 * @param r1
	 */
	public function __construct ($x0, $y0, $r0, $x1, $y1, $r1) {}

	/**
	 * The getCircles purpose
	 * @link http://www.php.net/manual/en/cairoradialgradient.getcircles.php
	 * @return array Description...
	 */
	public function getCircles () {}

	/**
	 * The addColorStopRgb purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.addcolorstoprgb.php
	 * @param offset string <p>
	 * Description...
	 * </p>
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function addColorStopRgb ($offset, $red, $green, $blue) {}

	/**
	 * The addColorStopRgba purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.addcolorstoprgba.php
	 * @param offset string <p>
	 * Description...
	 * </p>
	 * @param red string <p>
	 * Description...
	 * </p>
	 * @param green string <p>
	 * Description...
	 * </p>
	 * @param blue string <p>
	 * Description...
	 * </p>
	 * @param alpha string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function addColorStopRgba ($offset, $red, $green, $blue, $alpha) {}

	/**
	 * The getColorStopRgba purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getcolorstoprgba.php
	 * @param index string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function getColorStopRgba ($index) {}

	/**
	 * The getColorStopCount purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getcolorstopcount.php
	 * @return int Description...
	 */
	public function getColorStopCount () {}

	/**
	 * The getExtend purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.getextend.php
	 * @return int Description...
	 */
	public function getExtend () {}

	/**
	 * The setExtend purpose
	 * @link http://www.php.net/manual/en/cairogradientpattern.setextend.php
	 * @param extend int <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setExtend ($extend) {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairopattern.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairopattern.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The getMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.getmatrix.php
	 * @return void Description...
	 */
	public function getMatrix () {}

	/**
	 * The setMatrix purpose
	 * @link http://www.php.net/manual/en/cairopattern.setmatrix.php
	 * @param matrix string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setMatrix ($matrix) {}

}

final class CairoPatternType  {
	const SOLID = 0;
	const SURFACE = 1;
	const LINEAR = 2;
	const RADIAL = 3;

}

final class CairoExtend  {
	const NONE = 0;
	const REPEAT = 1;
	const REFLECT = 2;
	const PAD = 3;

}

final class CairoFilter  {
	const FAST = 0;
	const GOOD = 1;
	const BEST = 2;
	const NEAREST = 3;
	const BILINEAR = 4;
	const GAUSSIAN = 5;

}

class CairoPath  {
}

class CairoFontOptions  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.construct.php
	 */
	public function __construct () {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The merge purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.merge.php
	 * @param other string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function merge ($other) {}

	/**
	 * The hash purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.hash.php
	 * @return int Description...
	 */
	public function hash () {}

	/**
	 * The equal purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.equal.php
	 * @param other string <p>
	 * Description...
	 * </p>
	 * @return bool Description...
	 */
	public function equal ($other) {}

	/**
	 * The setAntialias purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.setantialias.php
	 * @param antialias string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setAntialias ($antialias) {}

	/**
	 * The getAntialias purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.getantialias.php
	 * @return int Description...
	 */
	public function getAntialias () {}

	/**
	 * The setSubpixelOrder purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.setsubpixelorder.php
	 * @param subpixel_order string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setSubpixelOrder ($subpixel_order) {}

	/**
	 * The getSubpixelOrder purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.getsubpixelorder.php
	 * @return int Description...
	 */
	public function getSubpixelOrder () {}

	/**
	 * The setHintStyle purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.sethintstyle.php
	 * @param hint_style string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setHintStyle ($hint_style) {}

	/**
	 * The getHintStyle purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.gethintstyle.php
	 * @return int Description...
	 */
	public function getHintStyle () {}

	/**
	 * The setHintMetrics purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.sethintmetrics.php
	 * @param hint_metrics string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setHintMetrics ($hint_metrics) {}

	/**
	 * The getHintMetrics purpose
	 * @link http://www.php.net/manual/en/cairofontoptions.gethintmetrics.php
	 * @return int Description...
	 */
	public function getHintMetrics () {}

}

final class CairoHintStyle  {
	const STYLE_DEFAULT = 0;
	const STYLE_NONE = 1;
	const STYLE_SLIGHT = 2;
	const STYLE_MEDIUM = 3;
	const STYLE_FULL = 4;

}

final class CairoHintMetrics  {
	const METRICS_DEFAULT = 0;
	const METRICS_OFF = 1;
	const METRICS_ON = 2;

}

class CairoFontFace  {

	/**
	 * Creates a new CairoFontFace object
	 * @link http://www.php.net/manual/en/cairofontface.construct.php
	 */
	public function __construct () {}

	/**
	 * Check for CairoFontFace errors
	 * @link http://www.php.net/manual/en/cairofontface.status.php
	 * @return int CAIRO_STATUS_SUCCESS or another error such as CAIRO_STATUS_NO_MEMORY.
	 */
	public function status () {}

	/**
	 * Retrieves the font face type
	 * @link http://www.php.net/manual/en/cairofontface.gettype.php
	 * @return int A font type that can be any one defined in CairoFontType
	 */
	public function getType () {}

}

final class CairoFontType  {
	const TOY = 0;
	const FT = 1;
	const WIN32 = 2;
	const QUARTZ = 3;
	const USER = 4;

}

class CairoScaledFont  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.construct.php
	 * @param font_face
	 * @param matrix[optional]
	 * @param ctm[optional]
	 * @param options[optional]
	 */
	public function __construct ($font_face, $matrix, $ctm, $options) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The extents purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.extents.php
	 * @return array Description...
	 */
	public function extents () {}

	/**
	 * The textExtents purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.textextents.php
	 * @param text string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function textExtents ($text) {}

	/**
	 * The glyphExtents purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.glyphextents.php
	 * @param glyphs string <p>
	 * Description...
	 * </p>
	 * @return array Description...
	 */
	public function glyphExtents ($glyphs) {}

	/**
	 * The getFontFace purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.getfontface.php
	 * @return void Description...
	 */
	public function getFontFace () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getFontMatrix purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.getfontmatrix.php
	 * @return void Description...
	 */
	public function getFontMatrix () {}

	/**
	 * The getCtm purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.getctm.php
	 * @return CairoMatrix Description...
	 */
	public function getCtm () {}

	/**
	 * The getScaleMatrix purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.getscalematrix.php
	 * @return void Description...
	 */
	public function getScaleMatrix () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairoscaledfont.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

}

class CairoToyFontFace extends CairoFontFace  {

	/**
	 * @param family
	 * @param slant[optional]
	 * @param weight[optional]
	 */
	public function __construct ($family, $slant, $weight) {}

	public function getFamily () {}

	public function getSlant () {}

	public function getWeight () {}

	/**
	 * Check for CairoFontFace errors
	 * @link http://www.php.net/manual/en/cairofontface.status.php
	 * @return int CAIRO_STATUS_SUCCESS or another error such as CAIRO_STATUS_NO_MEMORY.
	 */
	public function status () {}

	/**
	 * Retrieves the font face type
	 * @link http://www.php.net/manual/en/cairofontface.gettype.php
	 * @return int A font type that can be any one defined in CairoFontType
	 */
	public function getType () {}

}

final class CairoFontSlant  {
	const NORMAL = 0;
	const ITALIC = 1;
	const OBLIQUE = 2;

}

final class CairoFontWeight  {
	const NORMAL = 0;
	const BOLD = 1;

}

class CairoFtFontFace extends CairoFontFace  {

	/**
	 * @param face
	 * @param load_flags[optional]
	 */
	public function __construct ($face, $load_flags) {}

	/**
	 * Check for CairoFontFace errors
	 * @link http://www.php.net/manual/en/cairofontface.status.php
	 * @return int CAIRO_STATUS_SUCCESS or another error such as CAIRO_STATUS_NO_MEMORY.
	 */
	public function status () {}

	/**
	 * Retrieves the font face type
	 * @link http://www.php.net/manual/en/cairofontface.gettype.php
	 * @return int A font type that can be any one defined in CairoFontType
	 */
	public function getType () {}

}

class CairoSurface  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairosurface.construct.php
	 */
	public function __construct () {}

	/**
	 * The createSimilar purpose
	 * @link http://www.php.net/manual/en/cairosurface.createsimilar.php
	 * @param other CairoSurface <p>
	 * An existing surface used to select the backend of the new surface
	 * </p>
	 * @param content int <p>
	 * The content for the new surface. See the CairoContent class for possible values.
	 * </p>
	 * @param width string <p>
	 * Width of the new surface, (in device-space units).
	 * </p>
	 * @param height string <p>
	 * Height of the new surface, (in device-space units).
	 * </p>
	 * @return void A new CairoSurface
	 */
	public function createSimilar (CairoSurface $other, $content, $width, $height) {}

	/**
	 * @param x
	 * @param y
	 * @param width
	 * @param height
	 */
	public function createForRectangle ($x, $y, $width, $height) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairosurface.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The finish purpose
	 * @link http://www.php.net/manual/en/cairosurface.finish.php
	 * @return void Description...
	 */
	public function finish () {}

	/**
	 * The flush purpose
	 * @link http://www.php.net/manual/en/cairosurface.flush.php
	 * @return void Description...
	 */
	public function flush () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairosurface.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getContent purpose
	 * @link http://www.php.net/manual/en/cairosurface.getcontent.php
	 * @return int Description...
	 */
	public function getContent () {}

	/**
	 * The markDirty purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirty.php
	 * @return void Description...
	 */
	public function markDirty () {}

	/**
	 * The markDirtyRectangle purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirtyrectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function markDirtyRectangle ($x, $y, $width, $height) {}

	/**
	 * The setDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.setdeviceoffset.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDeviceOffset ($x, $y) {}

	/**
	 * The getDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.getdeviceoffset.php
	 * @return array Description...
	 */
	public function getDeviceOffset () {}

	/**
	 * The setFallbackResolution purpose
	 * @link http://www.php.net/manual/en/cairosurface.setfallbackresolution.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFallbackResolution ($x, $y) {}

	public function getFallbackResolution () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairosurface.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The copyPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.copypage.php
	 * @return void Description...
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	public function hasShowTextGlyphs () {}

	/**
	 * The writeToPng purpose
	 * @link http://www.php.net/manual/en/cairosurface.writetopng.php
	 * @param file string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function writeToPng ($file) {}

}

final class CairoContent  {
	const COLOR = 4096;
	const ALPHA = 8192;
	const COLOR_ALPHA = 12288;

}

final class CairoSurfaceType  {
	const IMAGE = 0;
	const PDF = 1;
	const PS = 2;
	const XLIB = 3;
	const XCB = 4;
	const GLITZ = 5;
	const QUARTZ = 6;
	const WIN32 = 7;
	const BEOS = 8;
	const DIRECTFB = 9;
	const SVG = 10;
	const OS2 = 11;
	const WIN32_PRINTING = 12;
	const QUARTZ_IMAGE = 13;

}

class CairoImageSurface extends CairoSurface  {

	/**
	 * Creates a new CairoImageSurface
	 * @link http://www.php.net/manual/en/cairoimagesurface.construct.php
	 * @param format
	 * @param width
	 * @param height
	 */
	public function __construct ($format, $width, $height) {}

	/**
	 * The createForData purpose
	 * @link http://www.php.net/manual/en/cairoimagesurface.createfordata.php
	 * @param data string <p>
	 * Description...
	 * </p>
	 * @param format int <p>
	 * Description...
	 * </p>
	 * @param width int <p>
	 * Description...
	 * </p>
	 * @param height int <p>
	 * Description...
	 * </p>
	 * @param stride int[optional] <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public static function createForData ($data, $format, $width, $height, $stride = null) {}

	/**
	 * Gets the image data as string
	 * @link http://www.php.net/manual/en/cairoimagesurface.getdata.php
	 * @return string The image data as string
	 */
	public function getData () {}

	/**
	 * Get the image format
	 * @link http://www.php.net/manual/en/cairoimagesurface.getformat.php
	 * @return int One of the CairoFormat enums
	 */
	public function getFormat () {}

	/**
	 * Retrieves the width of the CairoImageSurface
	 * @link http://www.php.net/manual/en/cairoimagesurface.getwidth.php
	 * @return int the width of the CairoImageSurface object
	 */
	public function getWidth () {}

	/**
	 * Retrieves the height of the CairoImageSurface
	 * @link http://www.php.net/manual/en/cairoimagesurface.getheight.php
	 * @return int CairoImageSurface object height
	 */
	public function getHeight () {}

	/**
	 * The getStride purpose
	 * @link http://www.php.net/manual/en/cairoimagesurface.getstride.php
	 * @return int Description...
	 */
	public function getStride () {}

	/**
	 * Creates a new CairoImageSurface form a png image file
	 * @link http://www.php.net/manual/en/cairoimagesurface.createfrompng.php
	 * @param file string <p>
	 * Path to PNG image file
	 * </p>
	 * @return CairoImageSurface CairoImageSurface object
	 */
	public static function createFromPng ($file) {}

	/**
	 * The createSimilar purpose
	 * @link http://www.php.net/manual/en/cairosurface.createsimilar.php
	 * @param other CairoSurface <p>
	 * An existing surface used to select the backend of the new surface
	 * </p>
	 * @param content int <p>
	 * The content for the new surface. See the CairoContent class for possible values.
	 * </p>
	 * @param width string <p>
	 * Width of the new surface, (in device-space units).
	 * </p>
	 * @param height string <p>
	 * Height of the new surface, (in device-space units).
	 * </p>
	 * @return void A new CairoSurface
	 */
	public function createSimilar (CairoSurface $other, $content, $width, $height) {}

	/**
	 * @param x
	 * @param y
	 * @param width
	 * @param height
	 */
	public function createForRectangle ($x, $y, $width, $height) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairosurface.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The finish purpose
	 * @link http://www.php.net/manual/en/cairosurface.finish.php
	 * @return void Description...
	 */
	public function finish () {}

	/**
	 * The flush purpose
	 * @link http://www.php.net/manual/en/cairosurface.flush.php
	 * @return void Description...
	 */
	public function flush () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairosurface.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getContent purpose
	 * @link http://www.php.net/manual/en/cairosurface.getcontent.php
	 * @return int Description...
	 */
	public function getContent () {}

	/**
	 * The markDirty purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirty.php
	 * @return void Description...
	 */
	public function markDirty () {}

	/**
	 * The markDirtyRectangle purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirtyrectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function markDirtyRectangle ($x, $y, $width, $height) {}

	/**
	 * The setDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.setdeviceoffset.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDeviceOffset ($x, $y) {}

	/**
	 * The getDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.getdeviceoffset.php
	 * @return array Description...
	 */
	public function getDeviceOffset () {}

	/**
	 * The setFallbackResolution purpose
	 * @link http://www.php.net/manual/en/cairosurface.setfallbackresolution.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFallbackResolution ($x, $y) {}

	public function getFallbackResolution () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairosurface.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The copyPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.copypage.php
	 * @return void Description...
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	public function hasShowTextGlyphs () {}

	/**
	 * The writeToPng purpose
	 * @link http://www.php.net/manual/en/cairosurface.writetopng.php
	 * @param file string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function writeToPng ($file) {}

}

final class CairoFormat  {
	const ARGB32 = 0;
	const RGB24 = 1;
	const A8 = 2;
	const A1 = 3;


	/**
	 * Provides an appropiate stride to use
	 * @link http://www.php.net/manual/en/cairoformat.strideforwidth.php
	 * @param format int <p>
	 * The desired CairoFormat to use
	 * </p>
	 * @param width int <p>
	 * The width of the image
	 * </p>
	 * @return int The appropriate stride to use given the desired format and width,
	 * or -1 if either the format is invalid or the width too large.
	 */
	public static function strideForWidth ($format, $width) {}

}

class CairoPdfSurface extends CairoSurface  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairopdfsurface.construct.php
	 * @param file
	 * @param width
	 * @param height
	 */
	public function __construct ($file, $width, $height) {}

	/**
	 * The setSize purpose
	 * @link http://www.php.net/manual/en/cairopdfsurface.setsize.php
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setSize ($width, $height) {}

	/**
	 * The createSimilar purpose
	 * @link http://www.php.net/manual/en/cairosurface.createsimilar.php
	 * @param other CairoSurface <p>
	 * An existing surface used to select the backend of the new surface
	 * </p>
	 * @param content int <p>
	 * The content for the new surface. See the CairoContent class for possible values.
	 * </p>
	 * @param width string <p>
	 * Width of the new surface, (in device-space units).
	 * </p>
	 * @param height string <p>
	 * Height of the new surface, (in device-space units).
	 * </p>
	 * @return void A new CairoSurface
	 */
	public function createSimilar (CairoSurface $other, $content, $width, $height) {}

	/**
	 * @param x
	 * @param y
	 * @param width
	 * @param height
	 */
	public function createForRectangle ($x, $y, $width, $height) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairosurface.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The finish purpose
	 * @link http://www.php.net/manual/en/cairosurface.finish.php
	 * @return void Description...
	 */
	public function finish () {}

	/**
	 * The flush purpose
	 * @link http://www.php.net/manual/en/cairosurface.flush.php
	 * @return void Description...
	 */
	public function flush () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairosurface.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getContent purpose
	 * @link http://www.php.net/manual/en/cairosurface.getcontent.php
	 * @return int Description...
	 */
	public function getContent () {}

	/**
	 * The markDirty purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirty.php
	 * @return void Description...
	 */
	public function markDirty () {}

	/**
	 * The markDirtyRectangle purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirtyrectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function markDirtyRectangle ($x, $y, $width, $height) {}

	/**
	 * The setDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.setdeviceoffset.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDeviceOffset ($x, $y) {}

	/**
	 * The getDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.getdeviceoffset.php
	 * @return array Description...
	 */
	public function getDeviceOffset () {}

	/**
	 * The setFallbackResolution purpose
	 * @link http://www.php.net/manual/en/cairosurface.setfallbackresolution.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFallbackResolution ($x, $y) {}

	public function getFallbackResolution () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairosurface.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The copyPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.copypage.php
	 * @return void Description...
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	public function hasShowTextGlyphs () {}

	/**
	 * The writeToPng purpose
	 * @link http://www.php.net/manual/en/cairosurface.writetopng.php
	 * @param file string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function writeToPng ($file) {}

}

class CairoPsSurface extends CairoSurface  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairopssurface.construct.php
	 * @param file
	 * @param width
	 * @param height
	 */
	public function __construct ($file, $width, $height) {}

	/**
	 * The setSize purpose
	 * @link http://www.php.net/manual/en/cairopssurface.setsize.php
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setSize ($width, $height) {}

	/**
	 * The restrictToLevel purpose
	 * @link http://www.php.net/manual/en/cairopssurface.restricttolevel.php
	 * @param level string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function restrictToLevel ($level) {}

	/**
	 * The getLevels purpose
	 * @link http://www.php.net/manual/en/cairopssurface.getlevels.php
	 * @return array Description...
	 */
	public static function getLevels () {}

	/**
	 * The levelToString purpose
	 * @link http://www.php.net/manual/en/cairopssurface.leveltostring.php
	 * @param level int <p>
	 * Description...
	 * </p>
	 * @return string Description...
	 */
	public static function levelToString ($level) {}

	/**
	 * The setEps purpose
	 * @link http://www.php.net/manual/en/cairopssurface.seteps.php
	 * @param level string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setEps ($level) {}

	/**
	 * The getEps purpose
	 * @link http://www.php.net/manual/en/cairopssurface.geteps.php
	 * @return bool Description...
	 */
	public function getEps () {}

	/**
	 * The dscBeginSetup purpose
	 * @link http://www.php.net/manual/en/cairopssurface.dscbeginsetup.php
	 * @return void Description...
	 */
	public function dscBeginSetup () {}

	/**
	 * The dscBeginPageSetup purpose
	 * @link http://www.php.net/manual/en/cairopssurface.dscbeginpagesetup.php
	 * @return void Description...
	 */
	public function dscBeginPageSetup () {}

	/**
	 * The dscComment purpose
	 * @link http://www.php.net/manual/en/cairopssurface.dsccomment.php
	 * @param comment string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function dscComment ($comment) {}

	/**
	 * The createSimilar purpose
	 * @link http://www.php.net/manual/en/cairosurface.createsimilar.php
	 * @param other CairoSurface <p>
	 * An existing surface used to select the backend of the new surface
	 * </p>
	 * @param content int <p>
	 * The content for the new surface. See the CairoContent class for possible values.
	 * </p>
	 * @param width string <p>
	 * Width of the new surface, (in device-space units).
	 * </p>
	 * @param height string <p>
	 * Height of the new surface, (in device-space units).
	 * </p>
	 * @return void A new CairoSurface
	 */
	public function createSimilar (CairoSurface $other, $content, $width, $height) {}

	/**
	 * @param x
	 * @param y
	 * @param width
	 * @param height
	 */
	public function createForRectangle ($x, $y, $width, $height) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairosurface.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The finish purpose
	 * @link http://www.php.net/manual/en/cairosurface.finish.php
	 * @return void Description...
	 */
	public function finish () {}

	/**
	 * The flush purpose
	 * @link http://www.php.net/manual/en/cairosurface.flush.php
	 * @return void Description...
	 */
	public function flush () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairosurface.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getContent purpose
	 * @link http://www.php.net/manual/en/cairosurface.getcontent.php
	 * @return int Description...
	 */
	public function getContent () {}

	/**
	 * The markDirty purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirty.php
	 * @return void Description...
	 */
	public function markDirty () {}

	/**
	 * The markDirtyRectangle purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirtyrectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function markDirtyRectangle ($x, $y, $width, $height) {}

	/**
	 * The setDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.setdeviceoffset.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDeviceOffset ($x, $y) {}

	/**
	 * The getDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.getdeviceoffset.php
	 * @return array Description...
	 */
	public function getDeviceOffset () {}

	/**
	 * The setFallbackResolution purpose
	 * @link http://www.php.net/manual/en/cairosurface.setfallbackresolution.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFallbackResolution ($x, $y) {}

	public function getFallbackResolution () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairosurface.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The copyPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.copypage.php
	 * @return void Description...
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	public function hasShowTextGlyphs () {}

	/**
	 * The writeToPng purpose
	 * @link http://www.php.net/manual/en/cairosurface.writetopng.php
	 * @param file string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function writeToPng ($file) {}

}

final class CairoPsLevel  {
	const LEVEL_2 = 0;
	const LEVEL_3 = 1;

}

class CairoSvgSurface extends CairoSurface  {

	/**
	 * The __construct purpose
	 * @link http://www.php.net/manual/en/cairosvgsurface.construct.php
	 * @param file
	 * @param width
	 * @param height
	 */
	public function __construct ($file, $width, $height) {}

	/**
	 * The restrictToVersion purpose
	 * @link http://www.php.net/manual/en/cairosvgsurface.restricttoversion.php
	 * @param version string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function restrictToVersion ($version) {}

	/**
	 * The versionToString purpose
	 * @link http://www.php.net/manual/en/cairosvgsurface.versiontostring.php
	 * @param version int <p>
	 * Description...
	 * </p>
	 * @return string Description...
	 */
	public static function versionToString ($version) {}

	/**
	 * Used to retrieve a list of supported SVG versions
	 * @link http://www.php.net/manual/en/cairosvgsurface.getversions.php
	 * @return array a numerically indexed array of integer values.
	 */
	public static function getVersions () {}

	/**
	 * The createSimilar purpose
	 * @link http://www.php.net/manual/en/cairosurface.createsimilar.php
	 * @param other CairoSurface <p>
	 * An existing surface used to select the backend of the new surface
	 * </p>
	 * @param content int <p>
	 * The content for the new surface. See the CairoContent class for possible values.
	 * </p>
	 * @param width string <p>
	 * Width of the new surface, (in device-space units).
	 * </p>
	 * @param height string <p>
	 * Height of the new surface, (in device-space units).
	 * </p>
	 * @return void A new CairoSurface
	 */
	public function createSimilar (CairoSurface $other, $content, $width, $height) {}

	/**
	 * @param x
	 * @param y
	 * @param width
	 * @param height
	 */
	public function createForRectangle ($x, $y, $width, $height) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairosurface.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The finish purpose
	 * @link http://www.php.net/manual/en/cairosurface.finish.php
	 * @return void Description...
	 */
	public function finish () {}

	/**
	 * The flush purpose
	 * @link http://www.php.net/manual/en/cairosurface.flush.php
	 * @return void Description...
	 */
	public function flush () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairosurface.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getContent purpose
	 * @link http://www.php.net/manual/en/cairosurface.getcontent.php
	 * @return int Description...
	 */
	public function getContent () {}

	/**
	 * The markDirty purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirty.php
	 * @return void Description...
	 */
	public function markDirty () {}

	/**
	 * The markDirtyRectangle purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirtyrectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function markDirtyRectangle ($x, $y, $width, $height) {}

	/**
	 * The setDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.setdeviceoffset.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDeviceOffset ($x, $y) {}

	/**
	 * The getDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.getdeviceoffset.php
	 * @return array Description...
	 */
	public function getDeviceOffset () {}

	/**
	 * The setFallbackResolution purpose
	 * @link http://www.php.net/manual/en/cairosurface.setfallbackresolution.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFallbackResolution ($x, $y) {}

	public function getFallbackResolution () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairosurface.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The copyPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.copypage.php
	 * @return void Description...
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	public function hasShowTextGlyphs () {}

	/**
	 * The writeToPng purpose
	 * @link http://www.php.net/manual/en/cairosurface.writetopng.php
	 * @param file string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function writeToPng ($file) {}

}

final class CairoSvgVersion  {
	const VERSION_1_1 = 0;
	const VERSION_1_2 = 1;

}

class CairoRecordingSurface extends CairoSurface  {

	/**
	 * @param content
	 * @param extents
	 */
	public function __construct ($content, $extents) {}

	public function inkExtents () {}

	/**
	 * The createSimilar purpose
	 * @link http://www.php.net/manual/en/cairosurface.createsimilar.php
	 * @param other CairoSurface <p>
	 * An existing surface used to select the backend of the new surface
	 * </p>
	 * @param content int <p>
	 * The content for the new surface. See the CairoContent class for possible values.
	 * </p>
	 * @param width string <p>
	 * Width of the new surface, (in device-space units).
	 * </p>
	 * @param height string <p>
	 * Height of the new surface, (in device-space units).
	 * </p>
	 * @return void A new CairoSurface
	 */
	public function createSimilar (CairoSurface $other, $content, $width, $height) {}

	/**
	 * @param x
	 * @param y
	 * @param width
	 * @param height
	 */
	public function createForRectangle ($x, $y, $width, $height) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairosurface.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The finish purpose
	 * @link http://www.php.net/manual/en/cairosurface.finish.php
	 * @return void Description...
	 */
	public function finish () {}

	/**
	 * The flush purpose
	 * @link http://www.php.net/manual/en/cairosurface.flush.php
	 * @return void Description...
	 */
	public function flush () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairosurface.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getContent purpose
	 * @link http://www.php.net/manual/en/cairosurface.getcontent.php
	 * @return int Description...
	 */
	public function getContent () {}

	/**
	 * The markDirty purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirty.php
	 * @return void Description...
	 */
	public function markDirty () {}

	/**
	 * The markDirtyRectangle purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirtyrectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function markDirtyRectangle ($x, $y, $width, $height) {}

	/**
	 * The setDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.setdeviceoffset.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDeviceOffset ($x, $y) {}

	/**
	 * The getDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.getdeviceoffset.php
	 * @return array Description...
	 */
	public function getDeviceOffset () {}

	/**
	 * The setFallbackResolution purpose
	 * @link http://www.php.net/manual/en/cairosurface.setfallbackresolution.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFallbackResolution ($x, $y) {}

	public function getFallbackResolution () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairosurface.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The copyPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.copypage.php
	 * @return void Description...
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	public function hasShowTextGlyphs () {}

	/**
	 * The writeToPng purpose
	 * @link http://www.php.net/manual/en/cairosurface.writetopng.php
	 * @param file string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function writeToPng ($file) {}

}

class CairoSubSurface extends CairoSurface  {

	public function __construct () {}

	/**
	 * The createSimilar purpose
	 * @link http://www.php.net/manual/en/cairosurface.createsimilar.php
	 * @param other CairoSurface <p>
	 * An existing surface used to select the backend of the new surface
	 * </p>
	 * @param content int <p>
	 * The content for the new surface. See the CairoContent class for possible values.
	 * </p>
	 * @param width string <p>
	 * Width of the new surface, (in device-space units).
	 * </p>
	 * @param height string <p>
	 * Height of the new surface, (in device-space units).
	 * </p>
	 * @return void A new CairoSurface
	 */
	public function createSimilar (CairoSurface $other, $content, $width, $height) {}

	/**
	 * @param x
	 * @param y
	 * @param width
	 * @param height
	 */
	public function createForRectangle ($x, $y, $width, $height) {}

	/**
	 * The status purpose
	 * @link http://www.php.net/manual/en/cairosurface.status.php
	 * @return int Description...
	 */
	public function status () {}

	/**
	 * The finish purpose
	 * @link http://www.php.net/manual/en/cairosurface.finish.php
	 * @return void Description...
	 */
	public function finish () {}

	/**
	 * The flush purpose
	 * @link http://www.php.net/manual/en/cairosurface.flush.php
	 * @return void Description...
	 */
	public function flush () {}

	/**
	 * The getFontOptions purpose
	 * @link http://www.php.net/manual/en/cairosurface.getfontoptions.php
	 * @return void Description...
	 */
	public function getFontOptions () {}

	/**
	 * The getContent purpose
	 * @link http://www.php.net/manual/en/cairosurface.getcontent.php
	 * @return int Description...
	 */
	public function getContent () {}

	/**
	 * The markDirty purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirty.php
	 * @return void Description...
	 */
	public function markDirty () {}

	/**
	 * The markDirtyRectangle purpose
	 * @link http://www.php.net/manual/en/cairosurface.markdirtyrectangle.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @param width string <p>
	 * Description...
	 * </p>
	 * @param height string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function markDirtyRectangle ($x, $y, $width, $height) {}

	/**
	 * The setDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.setdeviceoffset.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setDeviceOffset ($x, $y) {}

	/**
	 * The getDeviceOffset purpose
	 * @link http://www.php.net/manual/en/cairosurface.getdeviceoffset.php
	 * @return array Description...
	 */
	public function getDeviceOffset () {}

	/**
	 * The setFallbackResolution purpose
	 * @link http://www.php.net/manual/en/cairosurface.setfallbackresolution.php
	 * @param x string <p>
	 * Description...
	 * </p>
	 * @param y string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function setFallbackResolution ($x, $y) {}

	public function getFallbackResolution () {}

	/**
	 * The getType purpose
	 * @link http://www.php.net/manual/en/cairosurface.gettype.php
	 * @return int Description...
	 */
	public function getType () {}

	/**
	 * The copyPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.copypage.php
	 * @return void Description...
	 */
	public function copyPage () {}

	/**
	 * The showPage purpose
	 * @link http://www.php.net/manual/en/cairosurface.showpage.php
	 * @return void Description...
	 */
	public function showPage () {}

	public function hasShowTextGlyphs () {}

	/**
	 * The writeToPng purpose
	 * @link http://www.php.net/manual/en/cairosurface.writetopng.php
	 * @param file string <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function writeToPng ($file) {}

}

function cairo_version () {}

function cairo_version_string () {}

function cairo_available_surfaces () {}

function cairo_available_fonts () {}

/**
 * @param status
 */
function cairo_status_to_string ($status) {}

/**
 * Returns a new CairoContext object on the requested surface.
 * @link http://www.php.net/manual/en/function.cairo-create.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return CairoContext What is returned on success and failure
 */
function cairo_create (CairoSurface $surface) {}

/**
 * @param context CairoContext
 */
function cairo_status (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_save (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_restore (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_get_target (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_push_group (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param content
 */
function cairo_push_group_with_content (CairoContext $context, $content) {}

/**
 * @param context CairoContext
 */
function cairo_pop_group (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_pop_group_to_source (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_get_group_target (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param red
 * @param green
 * @param blue
 */
function cairo_set_source_rgb (CairoContext $context, $red, $green, $blue) {}

/**
 * @param context CairoContext
 * @param red
 * @param green
 * @param blue
 * @param alpha
 */
function cairo_set_source_rgba (CairoContext $context, $red, $green, $blue, $alpha) {}

/**
 * @param context CairoContext
 * @param pattern CairoPattern
 */
function cairo_set_source (CairoContext $contextCairoPattern , $pattern) {}

/**
 * @param context CairoContext
 * @param surface CairoSurface
 * @param x[optional]
 * @param y[optional]
 */
function cairo_set_source_surface (CairoContext $contextCairoSurface , $surface, $x, $y) {}

/**
 * @param context CairoContext
 */
function cairo_get_source (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param antialias[optional]
 */
function cairo_set_antialias (CairoContext $context, $antialias) {}

/**
 * @param context CairoContext
 */
function cairo_get_antialias (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param dashes
 * @param offset[optional]
 */
function cairo_set_dash (CairoContext $contextarray , $dashes, $offset) {}

/**
 * @param context CairoContext
 */
function cairo_get_dash_count (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_get_dash (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param setting
 */
function cairo_set_fill_rule (CairoContext $context, $setting) {}

/**
 * @param context CairoContext
 */
function cairo_get_fill_rule (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param setting
 */
function cairo_set_line_cap (CairoContext $context, $setting) {}

/**
 * @param context CairoContext
 */
function cairo_get_line_cap (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param setting
 */
function cairo_set_line_join (CairoContext $context, $setting) {}

/**
 * @param context CairoContext
 */
function cairo_get_line_join (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param width
 */
function cairo_set_line_width (CairoContext $context, $width) {}

/**
 * @param context CairoContext
 */
function cairo_get_line_width (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param limit
 */
function cairo_set_miter_limit (CairoContext $context, $limit) {}

/**
 * @param context CairoContext
 */
function cairo_get_miter_limit (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param setting
 */
function cairo_set_operator (CairoContext $context, $setting) {}

/**
 * @param context CairoContext
 */
function cairo_get_operator (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param tolerance
 */
function cairo_set_tolerance (CairoContext $context, $tolerance) {}

/**
 * @param context CairoContext
 */
function cairo_get_tolerance (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_clip (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_clip_preserve (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_reset_clip (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_in_clip (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 */
function cairo_clip_extents (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_clip_rectangle_list (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_fill (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_fill_preserve (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_fill_extents (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_in_fill (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param pattern CairoPattern
 */
function cairo_mask (CairoContext $contextCairoPattern , $pattern) {}

/**
 * @param context CairoContext
 * @param surface CairoSurface
 * @param x[optional]
 * @param y[optional]
 */
function cairo_mask_surface (CairoContext $contextCairoSurface , $surface, $x, $y) {}

/**
 * @param context CairoContext
 */
function cairo_paint (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param alpha
 */
function cairo_paint_with_alpha (CairoContext $context, $alpha) {}

/**
 * @param context CairoContext
 */
function cairo_stroke (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_stroke_preserve (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_stroke_extents (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_in_stroke (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 */
function cairo_copy_page (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_show_page (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_translate (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_scale (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param angle
 */
function cairo_rotate (CairoContext $context, $angle) {}

/**
 * @param context CairoContext
 * @param matrix CairoMatrix
 */
function cairo_transform (CairoContext $contextCairoMatrix , $matrix) {}

/**
 * @param context CairoContext
 * @param matrix CairoMatrix
 */
function cairo_set_matrix (CairoContext $contextCairoMatrix , $matrix) {}

/**
 * @param context CairoContext
 */
function cairo_get_matrix (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_identity_matrix (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_user_to_device (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_user_to_device_distance (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_device_to_user (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_device_to_user_distance (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 */
function cairo_copy_path (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_copy_path_flat (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param path CairoPath
 */
function cairo_append_path (CairoContext $contextCairoPath , $path) {}

/**
 * @param context CairoContext
 */
function cairo_has_current_point (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_get_current_point (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_new_path (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_new_sub_path (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_close_path (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 * @param radius
 * @param angle1
 * @param angle2
 */
function cairo_arc (CairoContext $context, $x, $y, $radius, $angle1, $angle2) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 * @param radius
 * @param angle1
 * @param angle2
 */
function cairo_arc_negative (CairoContext $context, $x, $y, $radius, $angle1, $angle2) {}

/**
 * @param context CairoContext
 * @param x1
 * @param y1
 * @param x2
 * @param y2
 * @param x3
 * @param y3
 */
function cairo_curve_to (CairoContext $context, $x1, $y1, $x2, $y2, $x3, $y3) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_line_to (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_move_to (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 * @param width
 * @param height
 */
function cairo_rectangle (CairoContext $context, $x, $y, $width, $height) {}

/**
 * @param context CairoContext
 * @param glyphs
 */
function cairo_glyph_path (CairoContext $contextarray , $glyphs) {}

/**
 * @param context CairoContext
 * @param text
 */
function cairo_text_path (CairoContext $context, $text) {}

/**
 * @param context CairoContext
 * @param x1
 * @param y1
 * @param x2
 * @param y2
 * @param x3
 * @param y3
 */
function cairo_rel_curve_to (CairoContext $context, $x1, $y1, $x2, $y2, $x3, $y3) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_rel_line_to (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 * @param x
 * @param y
 */
function cairo_rel_move_to (CairoContext $context, $x, $y) {}

/**
 * @param context CairoContext
 */
function cairo_path_extents (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param family
 * @param slant[optional]
 * @param weight[optional]
 */
function cairo_select_font_face (CairoContext $context, $family, $slant, $weight) {}

/**
 * @param context CairoContext
 * @param size
 */
function cairo_set_font_size (CairoContext $context, $size) {}

/**
 * @param context CairoContext
 * @param matrix CairoMatrix
 */
function cairo_set_font_matrix (CairoContext $contextCairoMatrix , $matrix) {}

/**
 * @param context CairoContext
 */
function cairo_get_font_matrix (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param fontoptions CairoFontOptions
 */
function cairo_set_font_options (CairoContext $contextCairoFontOptions , $fontoptions) {}

/**
 * @param context CairoContext
 */
function cairo_get_font_options (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param fontface CairoFontFace
 */
function cairo_set_font_face (CairoContext $contextCairoFontFace , $fontface) {}

/**
 * @param context CairoContext
 */
function cairo_get_font_face (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param scaledfont CairoScaledFont
 */
function cairo_set_scaled_font (CairoContext $contextCairoScaledFont , $scaledfont) {}

/**
 * @param context CairoContext
 */
function cairo_get_scaled_font (CairoContext $context) {}

/**
 * @param context CairoContext
 * @param text
 */
function cairo_show_text (CairoContext $context, $text) {}

/**
 * @param context CairoContext
 */
function cairo_text_extents (CairoContext $context) {}

/**
 * @param context CairoContext
 */
function cairo_font_extents (CairoContext $context) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-type.php
 * @param pattern CairoPattern <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_pattern_get_type (CairoPattern $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-status.php
 * @param pattern CairoPattern <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_pattern_status (CairoPattern $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-matrix.php
 * @param pattern CairoPattern <p>
 * Description...
 * </p>
 * @return CairoMatrix What is returned on success and failure
 */
function cairo_pattern_get_matrix (CairoPattern $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-set-matrix.php
 * @param pattern CairoPattern <p>
 * Description...
 * </p>
 * @param matrix CairoMatrix <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_pattern_set_matrix (CairoPattern $pattern, CairoMatrix $matrix) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-create-rgb.php
 * @param red float <p>
 * Description...
 * </p>
 * @param green float <p>
 * Description...
 * </p>
 * @param blue float <p>
 * Description...
 * </p>
 * @return CairoPattern What is returned on success and failure
 */
function cairo_pattern_create_rgb ($red, $green, $blue) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-create-rgba.php
 * @param red float <p>
 * Description...
 * </p>
 * @param green float <p>
 * Description...
 * </p>
 * @param blue float <p>
 * Description...
 * </p>
 * @param alpha float <p>
 * Description...
 * </p>
 * @return CairoPattern What is returned on success and failure
 */
function cairo_pattern_create_rgba ($red, $green, $blue, $alpha) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-create-for-surface.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return CairoPattern What is returned on success and failure
 */
function cairo_pattern_create_for_surface (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-set-filter.php
 * @param pattern CairoSurfacePattern <p>
 * Description...
 * </p>
 * @param filter int <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_pattern_set_filter (CairoSurfacePattern $pattern, $filter) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-filter.php
 * @param pattern CairoSurfacePattern <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_pattern_get_filter (CairoSurfacePattern $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-set-extend.php
 * @param pattern string <p>
 * Description...
 * </p>
 * @param extend string <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_pattern_set_extend ($pattern, $extend) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-extend.php
 * @param pattern string <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_pattern_get_extend ($pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-add-color-stop-rgb.php
 * @param pattern CairoGradientPattern <p>
 * Description...
 * </p>
 * @param offset float <p>
 * Description...
 * </p>
 * @param red float <p>
 * Description...
 * </p>
 * @param green float <p>
 * Description...
 * </p>
 * @param blue float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_pattern_add_color_stop_rgb (CairoGradientPattern $pattern, $offset, $red, $green, $blue) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-add-color-stop-rgba.php
 * @param pattern CairoGradientPattern <p>
 * Description...
 * </p>
 * @param offset float <p>
 * Description...
 * </p>
 * @param red float <p>
 * Description...
 * </p>
 * @param green float <p>
 * Description...
 * </p>
 * @param blue float <p>
 * Description...
 * </p>
 * @param alpha float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_pattern_add_color_stop_rgba (CairoGradientPattern $pattern, $offset, $red, $green, $blue, $alpha) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-create-linear.php
 * @param x0 float <p>
 * Description...
 * </p>
 * @param y0 float <p>
 * Description...
 * </p>
 * @param x1 float <p>
 * Description...
 * </p>
 * @param y1 float <p>
 * Description...
 * </p>
 * @return CairoPattern What is returned on success and failure
 */
function cairo_pattern_create_linear ($x0, $y0, $x1, $y1) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-create-radial.php
 * @param x0 float <p>
 * Description...
 * </p>
 * @param y0 float <p>
 * Description...
 * </p>
 * @param r0 float <p>
 * Description...
 * </p>
 * @param x1 float <p>
 * Description...
 * </p>
 * @param y1 float <p>
 * Description...
 * </p>
 * @param r1 float <p>
 * Description...
 * </p>
 * @return CairoPattern What is returned on success and failure
 */
function cairo_pattern_create_radial ($x0, $y0, $r0, $x1, $y1, $r1) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-color-stop-count.php
 * @param pattern CairoGradientPattern <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_pattern_get_color_stop_count (CairoGradientPattern $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-surface.php
 * @param pattern CairoSurfacePattern <p>
 * Description...
 * </p>
 * @return CairoSurface What is returned on success and failure
 */
function cairo_pattern_get_surface (CairoSurfacePattern $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-rgba.php
 * @param pattern CairoSolidPattern <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_pattern_get_rgba (CairoSolidPattern $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-color-stop-rgba.php
 * @param pattern CairoGradientPattern <p>
 * Description...
 * </p>
 * @param index int <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_pattern_get_color_stop_rgba (CairoGradientPattern $pattern, $index) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-linear-points.php
 * @param pattern CairoLinearGradient <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_pattern_get_linear_points (CairoLinearGradient $pattern) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pattern-get-radial-circles.php
 * @param pattern CairoRadialGradient <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_pattern_get_radial_circles (CairoRadialGradient $pattern) {}

/**
 * @param yx[optional]
 * @param xy[optional]
 * @param yy[optional]
 * @param x0[optional]
 * @param y0[optional]
 */
function cairo_matrix_init ($yx, $xy, $yy, $x0, $y0) {}

function cairo_matrix_init_identity () {}

/**
 * @param tx
 * @param ty
 */
function cairo_matrix_init_translate ($tx, $ty) {}

/**
 * @param sx
 * @param sy
 */
function cairo_matrix_init_scale ($sx, $sy) {}

/**
 * @param radians
 */
function cairo_matrix_init_rotate ($radians) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-matrix-translate.php
 * @param matrix CairoMatrix <p>
 * Description...
 * </p>
 * @param tx float <p>
 * Description...
 * </p>
 * @param ty float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_matrix_translate (CairoMatrix $matrix, $tx, $ty) {}

/**
 * @param matrix CairoMatrix
 * @param sx
 * @param sy
 */
function cairo_matrix_scale (CairoMatrix $matrix, $sx, $sy) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-matrix-rotate.php
 * @param matrix CairoMatrix <p>
 * Description...
 * </p>
 * @param radians float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_matrix_rotate (CairoMatrix $matrix, $radians) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-matrix-invert.php
 * @param matrix CairoMatrix <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_matrix_invert (CairoMatrix $matrix) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-matrix-multiply.php
 * @param matrix1 CairoMatrix <p>
 * Description...
 * </p>
 * @param matrix2 CairoMatrix <p>
 * Description...
 * </p>
 * @return CairoMatrix What is returned on success and failure
 */
function cairo_matrix_multiply (CairoMatrix $matrix1, CairoMatrix $matrix2) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-matrix-transform-distance.php
 * @param matrix CairoMatrix <p>
 * Description...
 * </p>
 * @param dx float <p>
 * Description...
 * </p>
 * @param dy float <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_matrix_transform_distance (CairoMatrix $matrix, $dx, $dy) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-matrix-transform-point.php
 * @param matrix CairoMatrix <p>
 * Description...
 * </p>
 * @param dx float <p>
 * Description...
 * </p>
 * @param dy float <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_matrix_transform_point (CairoMatrix $matrix, $dx, $dy) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-create.php
 * @return CairoFontOptions What is returned on success and failure
 */
function cairo_font_options_create () {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-status.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_options_status (CairoFontOptions $options) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-merge.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @param other CairoFontOptions <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_font_options_merge (CairoFontOptions $options, CairoFontOptions $other) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-hash.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_options_hash (CairoFontOptions $options) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-equal.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @param other CairoFontOptions <p>
 * Description...
 * </p>
 * @return bool What is returned on success and failure
 */
function cairo_font_options_equal (CairoFontOptions $options, CairoFontOptions $other) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-set-antialias.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @param antialias int <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_font_options_set_antialias (CairoFontOptions $options, $antialias) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-get-antialias.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_options_get_antialias (CairoFontOptions $options) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-set-subpixel-order.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @param subpixel_order int <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_font_options_set_subpixel_order (CairoFontOptions $options, $subpixel_order) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-get-subpixel-order.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_options_get_subpixel_order (CairoFontOptions $options) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-set-hint-style.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @param hint_style int <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_font_options_set_hint_style (CairoFontOptions $options, $hint_style) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-get-hint-style.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_options_get_hint_style (CairoFontOptions $options) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-set-hint-metrics.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @param hint_metrics int <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_font_options_set_hint_metrics (CairoFontOptions $options, $hint_metrics) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-options-get-hint-metrics.php
 * @param options CairoFontOptions <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_options_get_hint_metrics (CairoFontOptions $options) {}

/**
 * @param family
 * @param slant[optional]
 * @param weight[optional]
 */
function cairo_toy_font_face_create ($family, $slant, $weight) {}

/**
 * @param fontface CairoToyFontFace
 */
function cairo_toy_font_face_get_family (CairoToyFontFace $fontface) {}

/**
 * @param fontface CairoToyFontFace
 */
function cairo_toy_font_face_get_weight (CairoToyFontFace $fontface) {}

/**
 * @param fontface CairoToyFontFace
 */
function cairo_toy_font_face_get_slant (CairoToyFontFace $fontface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-face-status.php
 * @param fontface CairoFontFace <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_face_status (CairoFontFace $fontface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-font-face-get-type.php
 * @param fontface CairoFontFace <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_font_face_get_type (CairoFontFace $fontface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-create.php
 * @param fontface CairoFontFace <p>
 * Description...
 * </p>
 * @param matrix CairoMatrix <p>
 * Description...
 * </p>
 * @param ctm CairoMatrix <p>
 * Description...
 * </p>
 * @param fontoptions CairoFontOptions <p>
 * Description...
 * </p>
 * @return CairoScaledFont What is returned on success and failure
 */
function cairo_scaled_font_create (CairoFontFace $fontface, CairoMatrix $matrix, CairoMatrix $ctm, CairoFontOptions $fontoptions) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-status.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_scaled_font_status (CairoScaledFont $scaledfont) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-extents.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_scaled_font_extents (CairoScaledFont $scaledfont) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-text-extents.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @param text string <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_scaled_font_text_extents (CairoScaledFont $scaledfont, $text) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-glyph-extents.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @param glyphs array <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_scaled_font_glyph_extents (CairoScaledFont $scaledfont, array $glyphs) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-get-font-face.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return CairoFontFace What is returned on success and failure
 */
function cairo_scaled_font_get_font_face (CairoScaledFont $scaledfont) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-get-font-options.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return CairoFontOptions What is returned on success and failure
 */
function cairo_scaled_font_get_font_options (CairoScaledFont $scaledfont) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-get-font-matrix.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return CairoFontOptions What is returned on success and failure
 */
function cairo_scaled_font_get_font_matrix (CairoScaledFont $scaledfont) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-get-ctm.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return CairoMatrix What is returned on success and failure
 */
function cairo_scaled_font_get_ctm (CairoScaledFont $scaledfont) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-get-scale-matrix.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return CairoMatrix What is returned on success and failure
 */
function cairo_scaled_font_get_scale_matrix (CairoScaledFont $scaledfont) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-scaled-font-get-type.php
 * @param scaledfont CairoScaledFont <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_scaled_font_get_type (CairoScaledFont $scaledfont) {}

function cairo_ft_font_face_create () {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-create-similar.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @param content int <p>
 * Description...
 * </p>
 * @param width float <p>
 * Description...
 * </p>
 * @param height float <p>
 * Description...
 * </p>
 * @return CairoSurface What is returned on success and failure
 */
function cairo_surface_create_similar (CairoSurface $surface, $content, $width, $height) {}

/**
 * @param surface CairoSurface
 * @param content
 * @param width
 * @param height
 */
function cairo_surface_create_for_rectangle (CairoSurface $surface, $content, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-status.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_surface_status (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-finish.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_finish (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-flush.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_flush (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-get-font-options.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return CairoFontOptions What is returned on success and failure
 */
function cairo_surface_get_font_options (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-get-content.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_surface_get_content (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-mark-dirty.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_mark_dirty (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-mark-dirty-rectangle.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @param x float <p>
 * Description...
 * </p>
 * @param y float <p>
 * Description...
 * </p>
 * @param width float <p>
 * Description...
 * </p>
 * @param height float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_mark_dirty_rectangle (CairoSurface $surface, $x, $y, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-set-device-offset.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @param x float <p>
 * Description...
 * </p>
 * @param y float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_set_device_offset (CairoSurface $surface, $x, $y) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-get-device-offset.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return array What is returned on success and failure
 */
function cairo_surface_get_device_offset (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-set-fallback-resolution.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @param x float <p>
 * Description...
 * </p>
 * @param y float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_set_fallback_resolution (CairoSurface $surface, $x, $y) {}

/**
 * @param surface CairoSurface
 */
function cairo_surface_get_fallback_resolution (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-get-type.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_surface_get_type (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-copy-page.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_copy_page (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-show-page.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_show_page (CairoSurface $surface) {}

/**
 * @param surface CairoSurface
 */
function cairo_surface_has_show_text_glyphs (CairoSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-create.php
 * @param format int <p>
 * Description...
 * </p>
 * @param width int <p>
 * Description...
 * </p>
 * @param height int <p>
 * Description...
 * </p>
 * @return CairoImageSurface What is returned on success and failure
 */
function cairo_image_surface_create ($format, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-format-stride-for-width.php
 * @param format int <p>
 * Description...
 * </p>
 * @param width int <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_format_stride_for_width ($format, $width) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-create-for-data.php
 * @param data string <p>
 * Description...
 * </p>
 * @param format int <p>
 * Description...
 * </p>
 * @param width int <p>
 * Description...
 * </p>
 * @param height int <p>
 * Description...
 * </p>
 * @param stride int[optional] <p>
 * Description...
 * </p>
 * @return CairoImageSurface What is returned on success and failure
 */
function cairo_image_surface_create_for_data ($data, $format, $width, $height, $stride = null) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-get-data.php
 * @param surface CairoImageSurface <p>
 * Description...
 * </p>
 * @return string What is returned on success and failure
 */
function cairo_image_surface_get_data (CairoImageSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-get-format.php
 * @param surface CairoImageSurface <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_image_surface_get_format (CairoImageSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-get-width.php
 * @param surface CairoImageSurface <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_image_surface_get_width (CairoImageSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-get-height.php
 * @param surface CairoImageSurface <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_image_surface_get_height (CairoImageSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-get-stride.php
 * @param surface CairoImageSurface <p>
 * Description...
 * </p>
 * @return int What is returned on success and failure
 */
function cairo_image_surface_get_stride (CairoImageSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-image-surface-create-from-png.php
 * @param file string <p>
 * Description...
 * </p>
 * @return CairoImageSurface What is returned on success and failure
 */
function cairo_image_surface_create_from_png ($file) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-surface-write-to-png.php
 * @param surface CairoSurface <p>
 * Description...
 * </p>
 * @param stream resource <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_surface_write_to_png (CairoSurface $surface, $stream) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-svg-surface-create.php
 * @param file string <p>
 * Description...
 * </p>
 * @param width float <p>
 * Description...
 * </p>
 * @param height float <p>
 * Description...
 * </p>
 * @return CairoSvgSurface What is returned on success and failure
 */
function cairo_svg_surface_create ($file, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-svg-surface-restrict-to-version.php
 * @param surface CairoSvgSurface <p>
 * Description...
 * </p>
 * @param version int <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_svg_surface_restrict_to_version (CairoSvgSurface $surface, $version) {}

function cairo_svg_get_versions () {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-svg-version-to-string.php
 * @param version int <p>
 * Description...
 * </p>
 * @return string What is returned on success and failure
 */
function cairo_svg_version_to_string ($version) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pdf-surface-create.php
 * @param file string <p>
 * Description...
 * </p>
 * @param width float <p>
 * Description...
 * </p>
 * @param height float <p>
 * Description...
 * </p>
 * @return CairoPdfSurface What is returned on success and failure
 */
function cairo_pdf_surface_create ($file, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-pdf-surface-set-size.php
 * @param surface CairoPdfSurface <p>
 * Description...
 * </p>
 * @param width float <p>
 * Description...
 * </p>
 * @param height float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_pdf_surface_set_size (CairoPdfSurface $surface, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-create.php
 * @param file string <p>
 * Description...
 * </p>
 * @param width float <p>
 * Description...
 * </p>
 * @param height float <p>
 * Description...
 * </p>
 * @return CairoPsSurface What is returned on success and failure
 */
function cairo_ps_surface_create ($file, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-set-size.php
 * @param surface CairoPsSurface <p>
 * Description...
 * </p>
 * @param width float <p>
 * Description...
 * </p>
 * @param height float <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_ps_surface_set_size (CairoPsSurface $surface, $width, $height) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-restrict-to-level.php
 * @param surface CairoPsSurface <p>
 * Description...
 * </p>
 * @param level int <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_ps_surface_restrict_to_level (CairoPsSurface $surface, $level) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-level-to-string.php
 * @param level int <p>
 * Description...
 * </p>
 * @return string What is returned on success and failure
 */
function cairo_ps_level_to_string ($level) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-get-levels.php
 * @return array What is returned on success and failure
 */
function cairo_ps_get_levels () {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-set-eps.php
 * @param surface CairoPsSurface <p>
 * Description...
 * </p>
 * @param level bool <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_ps_surface_set_eps (CairoPsSurface $surface, $level) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-get-eps.php
 * @param surface CairoPsSurface <p>
 * Description...
 * </p>
 * @return bool What is returned on success and failure
 */
function cairo_ps_surface_get_eps (CairoPsSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-dsc-begin-setup.php
 * @param surface CairoPsSurface <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_ps_surface_dsc_begin_setup (CairoPsSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-dsc-begin-page-setup.php
 * @param surface CairoPsSurface <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_ps_surface_dsc_begin_page_setup (CairoPsSurface $surface) {}

/**
 * Description
 * @link http://www.php.net/manual/en/function.cairo-ps-surface-dsc-comment.php
 * @param surface CairoPsSurface <p>
 * Description...
 * </p>
 * @param comment string <p>
 * Description...
 * </p>
 * @return void What is returned on success and failure
 */
function cairo_ps_surface_dsc_comment (CairoPsSurface $surface, $comment) {}

/**
 * @param content
 * @param extents
 */
function cairo_recording_surface_create ($content, $extents) {}

/**
 * &Alias; <methodname>CairoMatrix::initScale</methodname>
 * @link http://www.php.net/manual/en/function.cairo-matrix-create-scale.php
 * @param sx
 * @param sy
 * @deprecated 
 */
function cairo_matrix_create_scale ($sx, $sy) {}

/**
 * &Alias; <methodname>CairoMatrix::initTranslate</methodname>
 * @link http://www.php.net/manual/en/function.cairo-matrix-create-translate.php
 * @param tx
 * @param ty
 * @deprecated 
 */
function cairo_matrix_create_translate ($tx, $ty) {}

define ('CAIRO_STATUS_SUCCESS', 0);
define ('CAIRO_STATUS_NO_MEMORY', 1);
define ('CAIRO_STATUS_INVALID_RESTORE', 2);
define ('CAIRO_STATUS_INVALID_POP_GROUP', 3);
define ('CAIRO_STATUS_NO_CURRENT_POINT', 4);
define ('CAIRO_STATUS_INVALID_MATRIX', 5);
define ('CAIRO_STATUS_INVALID_STATUS', 6);
define ('CAIRO_STATUS_NULL_POINTER', 7);
define ('CAIRO_STATUS_INVALID_STRING', 8);
define ('CAIRO_STATUS_INVALID_PATH_DATA', 9);
define ('CAIRO_STATUS_READ_ERROR', 10);
define ('CAIRO_STATUS_WRITE_ERROR', 11);
define ('CAIRO_STATUS_SURFACE_FINISHED', 12);
define ('CAIRO_STATUS_SURFACE_TYPE_MISMATCH', 13);
define ('CAIRO_STATUS_PATTERN_TYPE_MISMATCH', 14);
define ('CAIRO_STATUS_INVALID_CONTENT', 15);
define ('CAIRO_STATUS_INVALID_FORMAT', 16);
define ('CAIRO_STATUS_INVALID_VISUAL', 17);
define ('CAIRO_STATUS_FILE_NOT_FOUND', 18);
define ('CAIRO_STATUS_INVALID_DASH', 19);
define ('CAIRO_STATUS_INVALID_DSC_COMMENT', 20);
define ('CAIRO_STATUS_INVALID_INDEX', 21);
define ('CAIRO_STATUS_CLIP_NOT_REPRESENTABLE', 22);
define ('CAIRO_STATUS_TEMP_FILE_ERROR', 23);
define ('CAIRO_STATUS_INVALID_STRIDE', 24);
define ('CAIRO_STATUS_FONT_TYPE_MISMATCH', 25);
define ('CAIRO_STATUS_USER_FONT_IMMUTABLE', 26);
define ('CAIRO_STATUS_USER_FONT_ERROR', 27);
define ('CAIRO_STATUS_NEGATIVE_COUNT', 28);
define ('CAIRO_STATUS_INVALID_CLUSTERS', 29);
define ('CAIRO_STATUS_INVALID_SLANT', 30);
define ('CAIRO_STATUS_INVALID_WEIGHT', 31);
define ('CAIRO_ANTIALIAS_DEFAULT', 0);
define ('CAIRO_ANTIALIAS_NONE', 1);
define ('CAIRO_ANTIALIAS_GRAY', 2);
define ('CAIRO_ANTIALIAS_SUBPIXEL', 3);
define ('CAIRO_SUBPIXEL_ORDER_DEFAULT', 0);
define ('CAIRO_SUBPIXEL_ORDER_RGB', 1);
define ('CAIRO_SUBPIXEL_ORDER_BGR', 2);
define ('CAIRO_SUBPIXEL_ORDER_VRGB', 3);
define ('CAIRO_SUBPIXEL_ORDER_VBGR', 4);
define ('CAIRO_FILL_RULE_WINDING', 0);
define ('CAIRO_FILL_RULE_EVEN_ODD', 1);
define ('CAIRO_LINE_CAP_BUTT', 0);
define ('CAIRO_LINE_CAP_ROUND', 1);
define ('CAIRO_LINE_CAP_SQUARE', 2);
define ('CAIRO_LINE_JOIN_MITER', 0);
define ('CAIRO_LINE_JOIN_ROUND', 1);
define ('CAIRO_LINE_JOIN_BEVEL', 2);
define ('CAIRO_OPERATOR_CLEAR', 0);
define ('CAIRO_OPERATOR_SOURCE', 1);
define ('CAIRO_OPERATOR_OVER', 2);
define ('CAIRO_OPERATOR_IN', 3);
define ('CAIRO_OPERATOR_OUT', 4);
define ('CAIRO_OPERATOR_ATOP', 5);
define ('CAIRO_OPERATOR_DEST', 6);
define ('CAIRO_OPERATOR_DEST_OVER', 7);
define ('CAIRO_OPERATOR_DEST_IN', 8);
define ('CAIRO_OPERATOR_DEST_OUT', 9);
define ('CAIRO_OPERATOR_DEST_ATOP', 10);
define ('CAIRO_OPERATOR_XOR', 11);
define ('CAIRO_OPERATOR_ADD', 12);
define ('CAIRO_OPERATOR_SATURATE', 13);
define ('CAIRO_OPERATOR_MULTIPLY', 14);
define ('CAIRO_OPERATOR_SCREEN', 15);
define ('CAIRO_OPERATOR_OVERLAY', 16);
define ('CAIRO_OPERATOR_DARKEN', 17);
define ('CAIRO_OPERATOR_LIGHTEN', 18);
define ('CAIRO_OPERATOR_COLOR_DODGE', 19);
define ('CAIRO_OPERATOR_COLOR_BURN', 20);
define ('CAIRO_OPERATOR_HARD_LIGHT', 21);
define ('CAIRO_OPERATOR_SOFT_LIGHT', 22);
define ('CAIRO_OPERATOR_DIFFERENCE', 23);
define ('CAIRO_OPERATOR_EXCLUSION', 24);
define ('CAIRO_OPERATOR_HSL_HUE', 25);
define ('CAIRO_OPERATOR_HSL_SATURATION', 26);
define ('CAIRO_OPERATOR_HSL_COLOR', 27);
define ('CAIRO_OPERATOR_HSL_LUMINOSITY', 28);
define ('CAIRO_PATTERN_TYPE_SOLID', 0);
define ('CAIRO_PATTERN_TYPE_SURFACE', 1);
define ('CAIRO_PATTERN_TYPE_LINEAR', 2);
define ('CAIRO_PATTERN_TYPE_RADIAL', 3);
define ('CAIRO_EXTEND_NONE', 0);
define ('CAIRO_EXTEND_REPEAT', 1);
define ('CAIRO_EXTEND_REFLECT', 2);
define ('CAIRO_EXTEND_PAD', 3);
define ('CAIRO_FILTER_FAST', 0);
define ('CAIRO_FILTER_GOOD', 1);
define ('CAIRO_FILTER_BEST', 2);
define ('CAIRO_FILTER_NEAREST', 3);
define ('CAIRO_FILTER_BILINEAR', 4);
define ('CAIRO_FILTER_GAUSSIAN', 5);
define ('CAIRO_HINT_STYLE_DEFAULT', 0);
define ('CAIRO_HINT_STYLE_NONE', 1);
define ('CAIRO_HINT_STYLE_SLIGHT', 2);
define ('CAIRO_HINT_STYLE_MEDIUM', 3);
define ('CAIRO_HINT_STYLE_FULL', 4);
define ('CAIRO_HINT_METRICS_DEFAULT', 0);
define ('CAIRO_HINT_METRICS_OFF', 1);
define ('CAIRO_HINT_METRICS_ON', 2);
define ('CAIRO_FONT_TYPE_TOY', 0);
define ('CAIRO_FONT_TYPE_FT', 1);
define ('CAIRO_FONT_TYPE_WIN32', 2);
define ('CAIRO_FONT_TYPE_QUARTZ', 3);
define ('CAIRO_FONT_TYPE_USER', 4);
define ('CAIRO_FONT_SLANT_NORMAL', 0);
define ('CAIRO_FONT_SLANT_ITALIC', 1);
define ('CAIRO_FONT_SLANT_OBLIQUE', 2);
define ('CAIRO_FONT_WEIGHT_NORMAL', 0);
define ('CAIRO_FONT_WEIGHT_BOLD', 1);
define ('CAIRO_CONTENT_COLOR', 4096);
define ('CAIRO_CONTENT_ALPHA', 8192);
define ('CAIRO_CONTENT_COLOR_ALPHA', 12288);
define ('CAIRO_SURFACE_TYPE_IMAGE', 0);
define ('CAIRO_SURFACE_TYPE_PDF', 1);
define ('CAIRO_SURFACE_TYPE_PS', 2);
define ('CAIRO_SURFACE_TYPE_XLIB', 3);
define ('CAIRO_SURFACE_TYPE_XCB', 4);
define ('CAIRO_SURFACE_TYPE_GLITZ', 5);
define ('CAIRO_SURFACE_TYPE_QUARTZ', 6);
define ('CAIRO_SURFACE_TYPE_WIN32', 7);
define ('CAIRO_SURFACE_TYPE_BEOS', 8);
define ('CAIRO_SURFACE_TYPE_DIRECTFB', 9);
define ('CAIRO_SURFACE_TYPE_SVG', 10);
define ('CAIRO_SURFACE_TYPE_OS2', 11);
define ('CAIRO_SURFACE_TYPE_WIN32_PRINTING', 12);
define ('CAIRO_SURFACE_TYPE_QUARTZ_IMAGE', 13);
define ('CAIRO_FORMAT_ARGB32', 0);
define ('CAIRO_FORMAT_RGB24', 1);
define ('CAIRO_FORMAT_A8', 2);
define ('CAIRO_FORMAT_A1', 3);
define ('CAIRO_PS_LEVEL_2', 0);
define ('CAIRO_PS_LEVEL_3', 1);
define ('CAIRO_SVG_VERSION_1_1', 0);
define ('CAIRO_SVG_VERSION_1_2', 1);

// End of cairo v.0.3.2-beta
