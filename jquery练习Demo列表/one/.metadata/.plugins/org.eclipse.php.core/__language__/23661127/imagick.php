<?php

// Start of imagick v.3.1.2

class ImagickException extends Exception  {
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
	public function __construct ($message = null, $code = null, $previous = null) {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}

class ImagickDrawException extends Exception  {
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
	public function __construct ($message = null, $code = null, $previous = null) {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}

class ImagickPixelIteratorException extends Exception  {
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
	public function __construct ($message = null, $code = null, $previous = null) {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}

class ImagickPixelException extends Exception  {
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
	public function __construct ($message = null, $code = null, $previous = null) {}

	final public function getMessage () {}

	final public function getCode () {}

	final public function getFile () {}

	final public function getLine () {}

	final public function getTrace () {}

	final public function getPrevious () {}

	final public function getTraceAsString () {}

	public function __toString () {}

}

class Imagick implements Iterator, Traversable {
	const COLOR_BLACK = 11;
	const COLOR_BLUE = 12;
	const COLOR_CYAN = 13;
	const COLOR_GREEN = 14;
	const COLOR_RED = 15;
	const COLOR_YELLOW = 16;
	const COLOR_MAGENTA = 17;
	const COLOR_OPACITY = 18;
	const COLOR_ALPHA = 19;
	const COLOR_FUZZ = 20;
	const IMAGICK_EXTNUM = 30102;
	const IMAGICK_EXTVER = "3.1.2";
	const COMPOSITE_DEFAULT = 40;
	const COMPOSITE_UNDEFINED = 0;
	const COMPOSITE_NO = 1;
	const COMPOSITE_ADD = 2;
	const COMPOSITE_ATOP = 3;
	const COMPOSITE_BLEND = 4;
	const COMPOSITE_BUMPMAP = 5;
	const COMPOSITE_CLEAR = 7;
	const COMPOSITE_COLORBURN = 8;
	const COMPOSITE_COLORDODGE = 9;
	const COMPOSITE_COLORIZE = 10;
	const COMPOSITE_COPYBLACK = 11;
	const COMPOSITE_COPYBLUE = 12;
	const COMPOSITE_COPY = 13;
	const COMPOSITE_COPYCYAN = 14;
	const COMPOSITE_COPYGREEN = 15;
	const COMPOSITE_COPYMAGENTA = 16;
	const COMPOSITE_COPYOPACITY = 17;
	const COMPOSITE_COPYRED = 18;
	const COMPOSITE_COPYYELLOW = 19;
	const COMPOSITE_DARKEN = 20;
	const COMPOSITE_DSTATOP = 21;
	const COMPOSITE_DST = 22;
	const COMPOSITE_DSTIN = 23;
	const COMPOSITE_DSTOUT = 24;
	const COMPOSITE_DSTOVER = 25;
	const COMPOSITE_DIFFERENCE = 26;
	const COMPOSITE_DISPLACE = 27;
	const COMPOSITE_DISSOLVE = 28;
	const COMPOSITE_EXCLUSION = 29;
	const COMPOSITE_HARDLIGHT = 30;
	const COMPOSITE_HUE = 31;
	const COMPOSITE_IN = 32;
	const COMPOSITE_LIGHTEN = 33;
	const COMPOSITE_LUMINIZE = 35;
	const COMPOSITE_MINUS = 36;
	const COMPOSITE_MODULATE = 37;
	const COMPOSITE_MULTIPLY = 38;
	const COMPOSITE_OUT = 39;
	const COMPOSITE_OVER = 40;
	const COMPOSITE_OVERLAY = 41;
	const COMPOSITE_PLUS = 42;
	const COMPOSITE_REPLACE = 43;
	const COMPOSITE_SATURATE = 44;
	const COMPOSITE_SCREEN = 45;
	const COMPOSITE_SOFTLIGHT = 46;
	const COMPOSITE_SRCATOP = 47;
	const COMPOSITE_SRC = 48;
	const COMPOSITE_SRCIN = 49;
	const COMPOSITE_SRCOUT = 50;
	const COMPOSITE_SRCOVER = 51;
	const COMPOSITE_SUBTRACT = 52;
	const COMPOSITE_THRESHOLD = 53;
	const COMPOSITE_XOR = 54;
	const MONTAGEMODE_FRAME = 1;
	const MONTAGEMODE_UNFRAME = 2;
	const MONTAGEMODE_CONCATENATE = 3;
	const STYLE_NORMAL = 1;
	const STYLE_ITALIC = 2;
	const STYLE_OBLIQUE = 3;
	const STYLE_ANY = 4;
	const FILTER_UNDEFINED = 0;
	const FILTER_POINT = 1;
	const FILTER_BOX = 2;
	const FILTER_TRIANGLE = 3;
	const FILTER_HERMITE = 4;
	const FILTER_HANNING = 5;
	const FILTER_HAMMING = 6;
	const FILTER_BLACKMAN = 7;
	const FILTER_GAUSSIAN = 8;
	const FILTER_QUADRATIC = 9;
	const FILTER_CUBIC = 10;
	const FILTER_CATROM = 11;
	const FILTER_MITCHELL = 12;
	const FILTER_LANCZOS = 13;
	const FILTER_BESSEL = 14;
	const FILTER_SINC = 15;
	const IMGTYPE_UNDEFINED = 0;
	const IMGTYPE_BILEVEL = 1;
	const IMGTYPE_GRAYSCALE = 2;
	const IMGTYPE_GRAYSCALEMATTE = 3;
	const IMGTYPE_PALETTE = 4;
	const IMGTYPE_PALETTEMATTE = 5;
	const IMGTYPE_TRUECOLOR = 6;
	const IMGTYPE_TRUECOLORMATTE = 7;
	const IMGTYPE_COLORSEPARATION = 8;
	const IMGTYPE_COLORSEPARATIONMATTE = 9;
	const IMGTYPE_OPTIMIZE = 10;
	const RESOLUTION_UNDEFINED = 0;
	const RESOLUTION_PIXELSPERINCH = 1;
	const RESOLUTION_PIXELSPERCENTIMETER = 2;
	const COMPRESSION_UNDEFINED = 0;
	const COMPRESSION_NO = 1;
	const COMPRESSION_BZIP = 2;
	const COMPRESSION_FAX = 6;
	const COMPRESSION_GROUP4 = 7;
	const COMPRESSION_JPEG = 8;
	const COMPRESSION_JPEG2000 = 9;
	const COMPRESSION_LOSSLESSJPEG = 10;
	const COMPRESSION_LZW = 11;
	const COMPRESSION_RLE = 12;
	const COMPRESSION_ZIP = 13;
	const COMPRESSION_DXT1 = 3;
	const COMPRESSION_DXT3 = 4;
	const COMPRESSION_DXT5 = 5;
	const PAINT_POINT = 1;
	const PAINT_REPLACE = 2;
	const PAINT_FLOODFILL = 3;
	const PAINT_FILLTOBORDER = 4;
	const PAINT_RESET = 5;
	const GRAVITY_NORTHWEST = 1;
	const GRAVITY_NORTH = 2;
	const GRAVITY_NORTHEAST = 3;
	const GRAVITY_WEST = 4;
	const GRAVITY_CENTER = 5;
	const GRAVITY_EAST = 6;
	const GRAVITY_SOUTHWEST = 7;
	const GRAVITY_SOUTH = 8;
	const GRAVITY_SOUTHEAST = 9;
	const STRETCH_NORMAL = 1;
	const STRETCH_ULTRACONDENSED = 2;
	const STRETCH_CONDENSED = 4;
	const STRETCH_SEMICONDENSED = 5;
	const STRETCH_SEMIEXPANDED = 6;
	const STRETCH_EXPANDED = 7;
	const STRETCH_EXTRAEXPANDED = 8;
	const STRETCH_ULTRAEXPANDED = 9;
	const STRETCH_ANY = 10;
	const ALIGN_UNDEFINED = 0;
	const ALIGN_LEFT = 1;
	const ALIGN_CENTER = 2;
	const ALIGN_RIGHT = 3;
	const DECORATION_NO = 1;
	const DECORATION_UNDERLINE = 2;
	const DECORATION_OVERLINE = 3;
	const DECORATION_LINETROUGH = 4;
	const NOISE_UNIFORM = 1;
	const NOISE_GAUSSIAN = 2;
	const NOISE_MULTIPLICATIVEGAUSSIAN = 3;
	const NOISE_IMPULSE = 4;
	const NOISE_LAPLACIAN = 5;
	const NOISE_POISSON = 6;
	const NOISE_RANDOM = 7;
	const CHANNEL_UNDEFINED = 0;
	const CHANNEL_RED = 1;
	const CHANNEL_GRAY = 1;
	const CHANNEL_CYAN = 1;
	const CHANNEL_GREEN = 2;
	const CHANNEL_MAGENTA = 2;
	const CHANNEL_BLUE = 4;
	const CHANNEL_YELLOW = 4;
	const CHANNEL_ALPHA = 8;
	const CHANNEL_OPACITY = 8;
	const CHANNEL_MATTE = 8;
	const CHANNEL_BLACK = 32;
	const CHANNEL_INDEX = 32;
	const CHANNEL_ALL = 47;
	const CHANNEL_DEFAULT = 39;
	const METRIC_UNDEFINED = 0;
	const METRIC_MEANABSOLUTEERROR = 2;
	const METRIC_MEANSQUAREERROR = 4;
	const METRIC_PEAKABSOLUTEERROR = 5;
	const METRIC_PEAKSIGNALTONOISERATIO = 6;
	const METRIC_ROOTMEANSQUAREDERROR = 7;
	const PIXEL_CHAR = 1;
	const PIXEL_DOUBLE = 2;
	const PIXEL_FLOAT = 3;
	const PIXEL_INTEGER = 4;
	const PIXEL_LONG = 5;
	const PIXEL_QUANTUM = 6;
	const PIXEL_SHORT = 7;
	const EVALUATE_UNDEFINED = 0;
	const EVALUATE_ADD = 1;
	const EVALUATE_AND = 2;
	const EVALUATE_DIVIDE = 3;
	const EVALUATE_LEFTSHIFT = 4;
	const EVALUATE_MAX = 5;
	const EVALUATE_MIN = 6;
	const EVALUATE_MULTIPLY = 7;
	const EVALUATE_OR = 8;
	const EVALUATE_RIGHTSHIFT = 9;
	const EVALUATE_SET = 10;
	const EVALUATE_SUBTRACT = 11;
	const EVALUATE_XOR = 12;
	const EVALUATE_POW = 13;
	const EVALUATE_LOG = 14;
	const EVALUATE_THRESHOLD = 15;
	const EVALUATE_THRESHOLDBLACK = 16;
	const EVALUATE_THRESHOLDWHITE = 17;
	const EVALUATE_GAUSSIANNOISE = 18;
	const EVALUATE_IMPULSENOISE = 19;
	const EVALUATE_LAPLACIANNOISE = 20;
	const EVALUATE_MULTIPLICATIVENOISE = 21;
	const EVALUATE_POISSONNOISE = 22;
	const EVALUATE_UNIFORMNOISE = 23;
	const EVALUATE_COSINE = 24;
	const EVALUATE_SINE = 25;
	const EVALUATE_ADDMODULUS = 26;
	const COLORSPACE_UNDEFINED = 0;
	const COLORSPACE_RGB = 1;
	const COLORSPACE_GRAY = 2;
	const COLORSPACE_TRANSPARENT = 3;
	const COLORSPACE_OHTA = 4;
	const COLORSPACE_LAB = 5;
	const COLORSPACE_XYZ = 6;
	const COLORSPACE_YCBCR = 7;
	const COLORSPACE_YCC = 8;
	const COLORSPACE_YIQ = 9;
	const COLORSPACE_YPBPR = 10;
	const COLORSPACE_YUV = 11;
	const COLORSPACE_CMYK = 12;
	const COLORSPACE_SRGB = 13;
	const COLORSPACE_HSB = 14;
	const COLORSPACE_HSL = 15;
	const COLORSPACE_HWB = 16;
	const COLORSPACE_REC601LUMA = 17;
	const COLORSPACE_REC709LUMA = 19;
	const COLORSPACE_LOG = 21;
	const COLORSPACE_CMY = 22;
	const VIRTUALPIXELMETHOD_UNDEFINED = 0;
	const VIRTUALPIXELMETHOD_BACKGROUND = 1;
	const VIRTUALPIXELMETHOD_CONSTANT = 2;
	const VIRTUALPIXELMETHOD_EDGE = 4;
	const VIRTUALPIXELMETHOD_MIRROR = 5;
	const VIRTUALPIXELMETHOD_TILE = 7;
	const VIRTUALPIXELMETHOD_TRANSPARENT = 8;
	const VIRTUALPIXELMETHOD_MASK = 9;
	const VIRTUALPIXELMETHOD_BLACK = 10;
	const VIRTUALPIXELMETHOD_GRAY = 11;
	const VIRTUALPIXELMETHOD_WHITE = 12;
	const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;
	const VIRTUALPIXELMETHOD_VERTICALTILE = 14;
	const PREVIEW_UNDEFINED = 0;
	const PREVIEW_ROTATE = 1;
	const PREVIEW_SHEAR = 2;
	const PREVIEW_ROLL = 3;
	const PREVIEW_HUE = 4;
	const PREVIEW_SATURATION = 5;
	const PREVIEW_BRIGHTNESS = 6;
	const PREVIEW_GAMMA = 7;
	const PREVIEW_SPIFF = 8;
	const PREVIEW_DULL = 9;
	const PREVIEW_GRAYSCALE = 10;
	const PREVIEW_QUANTIZE = 11;
	const PREVIEW_DESPECKLE = 12;
	const PREVIEW_REDUCENOISE = 13;
	const PREVIEW_ADDNOISE = 14;
	const PREVIEW_SHARPEN = 15;
	const PREVIEW_BLUR = 16;
	const PREVIEW_THRESHOLD = 17;
	const PREVIEW_EDGEDETECT = 18;
	const PREVIEW_SPREAD = 19;
	const PREVIEW_SOLARIZE = 20;
	const PREVIEW_SHADE = 21;
	const PREVIEW_RAISE = 22;
	const PREVIEW_SEGMENT = 23;
	const PREVIEW_SWIRL = 24;
	const PREVIEW_IMPLODE = 25;
	const PREVIEW_WAVE = 26;
	const PREVIEW_OILPAINT = 27;
	const PREVIEW_CHARCOALDRAWING = 28;
	const PREVIEW_JPEG = 29;
	const RENDERINGINTENT_UNDEFINED = 0;
	const RENDERINGINTENT_SATURATION = 1;
	const RENDERINGINTENT_PERCEPTUAL = 2;
	const RENDERINGINTENT_ABSOLUTE = 3;
	const RENDERINGINTENT_RELATIVE = 4;
	const INTERLACE_UNDEFINED = 0;
	const INTERLACE_NO = 1;
	const INTERLACE_LINE = 2;
	const INTERLACE_PLANE = 3;
	const INTERLACE_PARTITION = 4;
	const INTERLACE_GIF = 5;
	const INTERLACE_JPEG = 6;
	const INTERLACE_PNG = 7;
	const FILLRULE_UNDEFINED = 0;
	const FILLRULE_EVENODD = 1;
	const FILLRULE_NONZERO = 2;
	const PATHUNITS_UNDEFINED = 0;
	const PATHUNITS_USERSPACE = 1;
	const PATHUNITS_USERSPACEONUSE = 2;
	const PATHUNITS_OBJECTBOUNDINGBOX = 3;
	const LINECAP_UNDEFINED = 0;
	const LINECAP_BUTT = 1;
	const LINECAP_ROUND = 2;
	const LINECAP_SQUARE = 3;
	const LINEJOIN_UNDEFINED = 0;
	const LINEJOIN_MITER = 1;
	const LINEJOIN_ROUND = 2;
	const LINEJOIN_BEVEL = 3;
	const RESOURCETYPE_UNDEFINED = 0;
	const RESOURCETYPE_AREA = 1;
	const RESOURCETYPE_DISK = 2;
	const RESOURCETYPE_FILE = 3;
	const RESOURCETYPE_MAP = 4;
	const RESOURCETYPE_MEMORY = 5;
	const DISPOSE_UNRECOGNIZED = 0;
	const DISPOSE_UNDEFINED = 0;
	const DISPOSE_NONE = 1;
	const DISPOSE_BACKGROUND = 2;
	const DISPOSE_PREVIOUS = 3;
	const INTERPOLATE_UNDEFINED = 0;
	const INTERPOLATE_AVERAGE = 1;
	const INTERPOLATE_BICUBIC = 2;
	const INTERPOLATE_BILINEAR = 3;
	const INTERPOLATE_FILTER = 4;
	const INTERPOLATE_INTEGER = 5;
	const INTERPOLATE_MESH = 6;
	const INTERPOLATE_NEARESTNEIGHBOR = 7;
	const INTERPOLATE_SPLINE = 8;
	const LAYERMETHOD_UNDEFINED = 0;
	const LAYERMETHOD_COALESCE = 1;
	const LAYERMETHOD_COMPAREANY = 2;
	const LAYERMETHOD_COMPARECLEAR = 3;
	const LAYERMETHOD_COMPAREOVERLAY = 4;
	const LAYERMETHOD_DISPOSE = 5;
	const LAYERMETHOD_OPTIMIZE = 6;
	const LAYERMETHOD_OPTIMIZEPLUS = 8;
	const LAYERMETHOD_OPTIMIZETRANS = 9;
	const LAYERMETHOD_COMPOSITE = 12;
	const LAYERMETHOD_OPTIMIZEIMAGE = 7;
	const LAYERMETHOD_REMOVEDUPS = 10;
	const LAYERMETHOD_REMOVEZERO = 11;
	const ORIENTATION_UNDEFINED = 0;
	const ORIENTATION_TOPLEFT = 1;
	const ORIENTATION_TOPRIGHT = 2;
	const ORIENTATION_BOTTOMRIGHT = 3;
	const ORIENTATION_BOTTOMLEFT = 4;
	const ORIENTATION_LEFTTOP = 5;
	const ORIENTATION_RIGHTTOP = 6;
	const ORIENTATION_RIGHTBOTTOM = 7;
	const ORIENTATION_LEFTBOTTOM = 8;
	const DISTORTION_UNDEFINED = 0;
	const DISTORTION_AFFINE = 1;
	const DISTORTION_AFFINEPROJECTION = 2;
	const DISTORTION_ARC = 9;
	const DISTORTION_BILINEAR = 6;
	const DISTORTION_PERSPECTIVE = 4;
	const DISTORTION_PERSPECTIVEPROJECTION = 5;
	const DISTORTION_SCALEROTATETRANSLATE = 3;
	const DISTORTION_POLYNOMIAL = 8;
	const DISTORTION_POLAR = 10;
	const DISTORTION_DEPOLAR = 11;
	const DISTORTION_BARREL = 12;
	const DISTORTION_BARRELINVERSE = 13;
	const DISTORTION_SHEPARDS = 14;
	const DISTORTION_SENTINEL = 15;
	const LAYERMETHOD_MERGE = 13;
	const LAYERMETHOD_FLATTEN = 14;
	const LAYERMETHOD_MOSAIC = 15;
	const ALPHACHANNEL_ACTIVATE = 1;
	const ALPHACHANNEL_DEACTIVATE = 4;
	const ALPHACHANNEL_RESET = 7;
	const ALPHACHANNEL_SET = 8;
	const ALPHACHANNEL_UNDEFINED = 0;
	const ALPHACHANNEL_COPY = 3;
	const ALPHACHANNEL_EXTRACT = 5;
	const ALPHACHANNEL_OPAQUE = 6;
	const ALPHACHANNEL_SHAPE = 9;
	const ALPHACHANNEL_TRANSPARENT = 10;
	const SPARSECOLORMETHOD_UNDEFINED = 0;
	const SPARSECOLORMETHOD_BARYCENTRIC = 1;
	const SPARSECOLORMETHOD_BILINEAR = 7;
	const SPARSECOLORMETHOD_POLYNOMIAL = 8;
	const SPARSECOLORMETHOD_SPEPARDS = 14;
	const SPARSECOLORMETHOD_VORONOI = 15;
	const DITHERMETHOD_UNDEFINED = 0;
	const DITHERMETHOD_NO = 1;
	const DITHERMETHOD_RIEMERSMA = 2;
	const DITHERMETHOD_FLOYDSTEINBERG = 3;
	const FUNCTION_UNDEFINED = 0;
	const FUNCTION_POLYNOMIAL = 1;
	const FUNCTION_SINUSOID = 2;


	/**
	 * Removes repeated portions of images to optimize
	 * @link http://www.php.net/manual/en/imagick.optimizeimagelayers.php
	 * @return bool true on success.
	 */
	public function optimizeimagelayers () {}

	/**
	 * Returns the maximum bounding region between images
	 * @link http://www.php.net/manual/en/imagick.compareimagelayers.php
	 * @param method int <p>
	 * One of the layer method constants.
	 * </p>
	 * @return Imagick true on success.
	 */
	public function compareimagelayers ($method) {}

	/**
	 * Quickly fetch attributes
	 * @link http://www.php.net/manual/en/imagick.pingimageblob.php
	 * @param image string <p>
	 * A string containing the image.
	 * </p>
	 * @return bool true on success.
	 */
	public function pingimageblob ($image) {}

	/**
	 * Get basic image attributes in a lightweight manner
	 * @link http://www.php.net/manual/en/imagick.pingimagefile.php
	 * @param filehandle resource <p>
	 * An open filehandle to the image.
	 * </p>
	 * @param fileName string[optional] <p>
	 * Optional filename for this image.
	 * </p>
	 * @return bool true on success.
	 */
	public function pingimagefile ($filehandle, $fileName = null) {}

	/**
	 * Creates a vertical mirror image
	 * @link http://www.php.net/manual/en/imagick.transposeimage.php
	 * @return bool true on success.
	 */
	public function transposeimage () {}

	/**
	 * Creates a horizontal mirror image
	 * @link http://www.php.net/manual/en/imagick.transverseimage.php
	 * @return bool true on success.
	 */
	public function transverseimage () {}

	/**
	 * Remove edges from the image
	 * @link http://www.php.net/manual/en/imagick.trimimage.php
	 * @param fuzz float <p>
	 * By default target must match a particular pixel color exactly.
	 * However, in many cases two colors may differ by a small amount.
	 * The fuzz member of image defines how much tolerance is acceptable
	 * to consider two colors as the same. This parameter represents the variation
	 * on the quantum range.
	 * </p>
	 * @return bool true on success.
	 */
	public function trimimage ($fuzz) {}

	/**
	 * Applies wave filter to the image
	 * @link http://www.php.net/manual/en/imagick.waveimage.php
	 * @param amplitude float <p>
	 * The amplitude of the wave.
	 * </p>
	 * @param length float <p>
	 * The length of the wave.
	 * </p>
	 * @return bool true on success.
	 */
	public function waveimage ($amplitude, $length) {}

	/**
	 * Adds vignette filter to the image
	 * @link http://www.php.net/manual/en/imagick.vignetteimage.php
	 * @param blackPoint float <p>
	 * The black point.
	 * </p>
	 * @param whitePoint float <p>
	 * The white point
	 * </p>
	 * @param x int <p>
	 * X offset of the ellipse
	 * </p>
	 * @param y int <p>
	 * Y offset of the ellipse
	 * </p>
	 * @return bool true on success.
	 */
	public function vignetteimage ($blackPoint, $whitePoint, $x, $y) {}

	/**
	 * Discards all but one of any pixel color
	 * @link http://www.php.net/manual/en/imagick.uniqueimagecolors.php
	 * @return bool true on success.
	 */
	public function uniqueimagecolors () {}

	/**
	 * Return if the image has a matte channel
	 * @link http://www.php.net/manual/en/imagick.getimagematte.php
	 * @return bool true on success or false on failure
	 */
	public function getimagematte () {}

	/**
	 * Sets the image matte channel
	 * @link http://www.php.net/manual/en/imagick.setimagematte.php
	 * @param matte bool <p>
	 * True activates the matte channel and false disables it.
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagematte ($matte) {}

	/**
	 * Adaptively resize image with data dependent triangulation
	 * @link http://www.php.net/manual/en/imagick.adaptiveresizeimage.php
	 * @param columns int <p>
	 * The number of columns in the scaled image.
	 * </p>
	 * @param rows int <p>
	 * The number of rows in the scaled image.
	 * </p>
	 * @param bestfit bool[optional] <p>
	 * Whether to fit the image inside a bounding box.
	 * </p>
	 * @return bool true on success.
	 */
	public function adaptiveresizeimage ($columns, $rows, $bestfit = null) {}

	/**
	 * Simulates a pencil sketch
	 * @link http://www.php.net/manual/en/imagick.sketchimage.php
	 * @param radius float <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel
	 * </p>
	 * @param sigma float <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param angle float <p>
	 * Apply the effect along this angle.
	 * </p>
	 * @return bool true on success.
	 */
	public function sketchimage ($radius, $sigma, $angle) {}

	/**
	 * Creates a 3D effect
	 * @link http://www.php.net/manual/en/imagick.shadeimage.php
	 * @param gray bool <p>
	 * A value other than zero shades the intensity of each pixel.
	 * </p>
	 * @param azimuth float <p>
	 * Defines the light source direction.
	 * </p>
	 * @param elevation float <p>
	 * Defines the light source direction.
	 * </p>
	 * @return bool true on success.
	 */
	public function shadeimage ($gray, $azimuth, $elevation) {}

	/**
	 * Returns the size offset
	 * @link http://www.php.net/manual/en/imagick.getsizeoffset.php
	 * @return int the size offset associated with the Imagick object.
	 */
	public function getsizeoffset () {}

	/**
	 * Sets the size and offset of the Imagick object
	 * @link http://www.php.net/manual/en/imagick.setsizeoffset.php
	 * @param columns int <p>
	 * The width in pixels.
	 * </p>
	 * @param rows int <p>
	 * The height in pixels.
	 * </p>
	 * @param offset int <p>
	 * The image offset.
	 * </p>
	 * @return bool true on success.
	 */
	public function setsizeoffset ($columns, $rows, $offset) {}

	/**
	 * Adds adaptive blur filter to image
	 * @link http://www.php.net/manual/en/imagick.adaptiveblurimage.php
	 * @param radius float <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * Provide a value of 0 and the radius will be chosen automagically.
	 * </p>
	 * @param sigma float <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return bool true on success.
	 */
	public function adaptiveblurimage ($radius, $sigma, $channel = null) {}

	/**
	 * Enhances the contrast of a color image
	 * @link http://www.php.net/manual/en/imagick.contraststretchimage.php
	 * @param black_point float <p>
	 * The black point.
	 * </p>
	 * @param white_point float <p>
	 * The white point.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Imagick::CHANNEL_ALL. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function contraststretchimage ($black_point, $white_point, $channel = null) {}

	/**
	 * Adaptively sharpen the image
	 * @link http://www.php.net/manual/en/imagick.adaptivesharpenimage.php
	 * @param radius float <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel. Use 0 for auto-select.
	 * </p>
	 * @param sigma float <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return bool true on success.
	 */
	public function adaptivesharpenimage ($radius, $sigma, $channel = null) {}

	/**
	 * Creates a high-contrast, two-color image
	 * @link http://www.php.net/manual/en/imagick.randomthresholdimage.php
	 * @param low float <p>
	 * The low point
	 * </p>
	 * @param high float <p>
	 * The high point
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function randomthresholdimage ($low, $high, $channel = null) {}

	/**
	 * @param xRounding
	 * @param yRounding
	 * @param strokeWidth[optional]
	 * @param displace[optional]
	 * @param sizeCorrection[optional]
	 */
	public function roundcornersimage ($xRounding, $yRounding, $strokeWidth = null, $displace = null, $sizeCorrection = null) {}

	/**
	 * Rounds image corners
	 * @link http://www.php.net/manual/en/imagick.roundcorners.php
	 * @param x_rounding float <p>
	 * x rounding
	 * </p>
	 * @param y_rounding float <p>
	 * y rounding
	 * </p>
	 * @param stroke_width float[optional] <p>
	 * stroke width
	 * </p>
	 * @param displace float[optional] <p>
	 * image displace
	 * </p>
	 * @param size_correction float[optional] <p>
	 * size correction
	 * </p>
	 * @return bool true on success.
	 */
	public function roundcorners ($x_rounding, $y_rounding, $stroke_width = null, $displace = null, $size_correction = null) {}

	/**
	 * Set the iterator position
	 * @link http://www.php.net/manual/en/imagick.setiteratorindex.php
	 * @param index int <p>
	 * The position to set the iterator to
	 * </p>
	 * @return bool true on success.
	 */
	public function setiteratorindex ($index) {}

	/**
	 * Gets the index of the current active image
	 * @link http://www.php.net/manual/en/imagick.getiteratorindex.php
	 * @return int an integer containing the index of the image in the stack.
	 */
	public function getiteratorindex () {}

	/**
	 * Convenience method for setting crop size and the image geometry
	 * @link http://www.php.net/manual/en/imagick.transformimage.php
	 * @param crop string <p>
	 * A crop geometry string. This geometry defines a subregion of the image to crop.
	 * </p>
	 * @param geometry string <p>
	 * An image geometry string. This geometry defines the final size of the image.
	 * </p>
	 * @return Imagick true on success.
	 */
	public function transformimage ($crop, $geometry) {}

	/**
	 * Sets the image opacity level
	 * @link http://www.php.net/manual/en/imagick.setimageopacity.php
	 * @param opacity float <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageopacity ($opacity) {}

	/**
	 * Performs an ordered dither
	 * @link http://www.php.net/manual/en/imagick.orderedposterizeimage.php
	 * @param threshold_map string <p>
	 * A string containing the name of the threshold dither map to use
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function orderedposterizeimage ($threshold_map, $channel = null) {}

	/**
	 * Simulates a Polaroid picture
	 * @link http://www.php.net/manual/en/imagick.polaroidimage.php
	 * @param properties ImagickDraw <p>
	 * The polaroid properties
	 * </p>
	 * @param angle float <p>
	 * The polaroid angle
	 * </p>
	 * @return bool true on success.
	 */
	public function polaroidimage (ImagickDraw $properties, $angle) {}

	/**
	 * Returns the named image property
	 * @link http://www.php.net/manual/en/imagick.getimageproperty.php
	 * @param name string <p>
	 * name of the property (for example Exif:DateTime) 
	 * </p>
	 * @return string a string containing the image property, false if a 
	 * property with the given name does not exist.
	 */
	public function getimageproperty ($name) {}

	/**
	 * Sets an image property
	 * @link http://www.php.net/manual/en/imagick.setimageproperty.php
	 * @param name string <p>
	 * </p>
	 * @param value string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageproperty ($name, $value) {}

	/**
	 * Sets the image interpolate pixel method
	 * @link http://www.php.net/manual/en/imagick.setimageinterpolatemethod.php
	 * @param method int <p>
	 * The method is one of the Imagick::INTERPOLATE_* constants
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageinterpolatemethod ($method) {}

	/**
	 * Returns the interpolation method
	 * @link http://www.php.net/manual/en/imagick.getimageinterpolatemethod.php
	 * @return int the interpolate method on success.
	 */
	public function getimageinterpolatemethod () {}

	/**
	 * Stretches with saturation the image intensity
	 * @link http://www.php.net/manual/en/imagick.linearstretchimage.php
	 * @param blackPoint float <p>
	 * The image black point
	 * </p>
	 * @param whitePoint float <p>
	 * The image white point
	 * </p>
	 * @return bool true on success.
	 */
	public function linearstretchimage ($blackPoint, $whitePoint) {}

	/**
	 * Returns the image length in bytes
	 * @link http://www.php.net/manual/en/imagick.getimagelength.php
	 * @return int an int containing the current image size.
	 */
	public function getimagelength () {}

	/**
	 * Set image size
	 * @link http://www.php.net/manual/en/imagick.extentimage.php
	 * @param width int <p>
	 * The new width
	 * </p>
	 * @param height int <p>
	 * The new height
	 * </p>
	 * @param x int <p>
	 * X position for the new size
	 * </p>
	 * @param y int <p>
	 * Y position for the new size
	 * </p>
	 * @return bool true on success.
	 */
	public function extentimage ($width, $height, $x, $y) {}

	/**
	 * Gets the image orientation
	 * @link http://www.php.net/manual/en/imagick.getimageorientation.php
	 * @return int an int on success.
	 */
	public function getimageorientation () {}

	/**
	 * Sets the image orientation
	 * @link http://www.php.net/manual/en/imagick.setimageorientation.php
	 * @param orientation int <p>
	 * One of the orientation constants
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageorientation ($orientation) {}

	/**
	 * Changes the color value of any pixel that matches target
	 * @link http://www.php.net/manual/en/imagick.paintfloodfillimage.php
	 * @param fill mixed <p>
	 * ImagickPixel object or a string containing the fill color
	 * </p>
	 * @param fuzz float <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at
	 * intensities of 100 and 102 respectively are now interpreted as the
	 * same color for the purposes of the floodfill.
	 * </p>
	 * @param bordercolor mixed <p>
	 * ImagickPixel object or a string containing the border color
	 * </p>
	 * @param x int <p>
	 * X start position of the floodfill
	 * </p>
	 * @param y int <p>
	 * Y start position of the floodfill
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return bool true on success.
	 */
	public function paintfloodfillimage ($fill, $fuzz, $bordercolor, $x, $y, $channel = null) {}

	/**
	 * Replaces colors in the image
	 * @link http://www.php.net/manual/en/imagick.clutimage.php
	 * @param lookup_table Imagick <p>
	 * Imagick object containing the color lookup table
	 * </p>
	 * @param channel float[optional] <p>
	 * The Channeltype
	 * constant. When not supplied, default channels are replaced.
	 * </p>
	 * @return bool true on success.
	 */
	public function clutimage (Imagick $lookup_table, $channel = null) {}

	/**
	 * Returns the image properties
	 * @link http://www.php.net/manual/en/imagick.getimageproperties.php
	 * @param pattern string[optional] <p>
	 * The pattern for property names.
	 * </p>
	 * @param only_names bool[optional] <p>
	 * Whether to return only property names. If false then also the values are returned
	 * </p>
	 * @return array an array containing the image properties or property names.
	 */
	public function getimageproperties ($pattern = null, $only_names = null) {}

	/**
	 * Returns the image profiles
	 * @link http://www.php.net/manual/en/imagick.getimageprofiles.php
	 * @param pattern string[optional] <p>
	 * The pattern for profile names.
	 * </p>
	 * @param only_names bool[optional] <p>
	 * Whether to return only profile names. If false then values are returned as well
	 * </p>
	 * @return array an array containing the image profiles or profile names.
	 */
	public function getimageprofiles ($pattern = null, $only_names = null) {}

	/**
	 * Distorts an image using various distortion methods
	 * @link http://www.php.net/manual/en/imagick.distortimage.php
	 * @param method int <p>
	 * The method of image distortion. See distortion constants
	 * </p>
	 * @param arguments array <p>
	 * The arguments for this distortion method
	 * </p>
	 * @param bestfit bool <p>
	 * Attempt to resize destination to fit distorted source
	 * </p>
	 * @return bool true on success.
	 */
	public function distortimage ($method, array $arguments, $bestfit) {}

	/**
	 * Writes an image to a filehandle
	 * @link http://www.php.net/manual/en/imagick.writeimagefile.php
	 * @param filehandle resource <p>
	 * Filehandle where to write the image
	 * </p>
	 * @return bool true on success.
	 */
	public function writeimagefile ($filehandle) {}

	/**
	 * Writes frames to a filehandle
	 * @link http://www.php.net/manual/en/imagick.writeimagesfile.php
	 * @param filehandle resource <p>
	 * Filehandle where to write the images
	 * </p>
	 * @return bool true on success.
	 */
	public function writeimagesfile ($filehandle) {}

	/**
	 * Reset image page
	 * @link http://www.php.net/manual/en/imagick.resetimagepage.php
	 * @param page string <p>
	 * The page definition. For example 7168x5147+0+0
	 * </p>
	 * @return bool true on success.
	 */
	public function resetimagepage ($page) {}

	/**
	 * Sets image clip mask
	 * @link http://www.php.net/manual/en/imagick.setimageclipmask.php
	 * @param clip_mask Imagick <p>
	 * The Imagick object containing the clip mask
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageclipmask (Imagick $clip_mask) {}

	/**
	 * Gets image clip mask
	 * @link http://www.php.net/manual/en/imagick.getimageclipmask.php
	 * @return Imagick an Imagick object containing the clip mask.
	 */
	public function getimageclipmask () {}

	/**
	 * Animates an image or images
	 * @link http://www.php.net/manual/en/imagick.animateimages.php
	 * @param x_server string <p>
	 * X server address
	 * </p>
	 * @return bool true on success.
	 */
	public function animateimages ($x_server) {}

	/**
	 * Recolors image
	 * @link http://www.php.net/manual/en/imagick.recolorimage.php
	 * @param matrix array <p>
	 * The matrix containing the color values
	 * </p>
	 * @return bool true on success.
	 */
	public function recolorimage (array $matrix) {}

	/**
	 * Sets font
	 * @link http://www.php.net/manual/en/imagick.setfont.php
	 * @param font string <p>
	 * Font name or a filename
	 * </p>
	 * @return bool true on success.
	 */
	public function setfont ($font) {}

	/**
	 * Gets font
	 * @link http://www.php.net/manual/en/imagick.getfont.php
	 * @return string the string containing the font name or false if not font is set.
	 */
	public function getfont () {}

	/**
	 * Sets point size
	 * @link http://www.php.net/manual/en/imagick.setpointsize.php
	 * @param point_size float <p>
	 * Point size
	 * </p>
	 * @return bool true on success.
	 */
	public function setpointsize ($point_size) {}

	/**
	 * Gets point size
	 * @link http://www.php.net/manual/en/imagick.getpointsize.php
	 * @return float a &float; containing the point size.
	 */
	public function getpointsize () {}

	/**
	 * Merges image layers
	 * @link http://www.php.net/manual/en/imagick.mergeimagelayers.php
	 * @param layer_method int <p>
	 * One of the Imagick::LAYERMETHOD_* constants
	 * </p>
	 * @return bool true on success.
	 */
	public function mergeimagelayers ($layer_method) {}

	/**
	 * Sets image alpha channel
	 * @link http://www.php.net/manual/en/imagick.setimagealphachannel.php
	 * @param mode int <p>
	 * One of the Imagick::ALPHACHANNEL_* constants
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagealphachannel ($mode) {}

	/**
	 * Changes the color value of any pixel that matches target
	 * @link http://www.php.net/manual/en/imagick.floodfillpaintimage.php
	 * @param fill mixed <p>
	 * ImagickPixel object or a string containing the fill color
	 * </p>
	 * @param fuzz float <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param target mixed <p>
	 * ImagickPixel object or a string containing the target color to paint
	 * </p>
	 * @param x int <p>
	 * X start position of the floodfill
	 * </p>
	 * @param y int <p>
	 * Y start position of the floodfill
	 * </p>
	 * @param invert bool <p>
	 * If true paints any pixel that does not match the target color.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return bool true on success.
	 */
	public function floodfillpaintimage ($fill, $fuzz, $target, $x, $y, $invert, $channel = null) {}

	/**
	 * Changes the color value of any pixel that matches target
	 * @link http://www.php.net/manual/en/imagick.opaquepaintimage.php
	 * @param target mixed <p>
	 * ImagickPixel object or a string containing the color to change
	 * </p>
	 * @param fill mixed <p>
	 * The replacement color
	 * </p>
	 * @param fuzz float <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param invert bool <p>
	 * If true paints any pixel that does not match the target color.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return bool true on success.
	 */
	public function opaquepaintimage ($target, $fill, $fuzz, $invert, $channel = null) {}

	/**
	 * Paints pixels transparent
	 * @link http://www.php.net/manual/en/imagick.transparentpaintimage.php
	 * @param target mixed <p>
	 * The target color to paint
	 * </p>
	 * @param alpha float <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.
	 * </p>
	 * @param fuzz float <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param invert bool <p>
	 * If true paints any pixel that does not match the target color.
	 * </p>
	 * @return bool true on success.
	 */
	public function transparentpaintimage ($target, $alpha, $fuzz, $invert) {}

	/**
	 * Animates an image or images
	 * @link http://www.php.net/manual/en/imagick.liquidrescaleimage.php
	 * @param width int <p>
	 * The width of the target size
	 * </p>
	 * @param height int <p>
	 * The height of the target size
	 * </p>
	 * @param delta_x float <p>
	 * How much the seam can traverse on x-axis. 
	 * Passing 0 causes the seams to be straight.
	 * </p>
	 * @param rigidity float <p>
	 * Introduces a bias for non-straight seams. This parameter is 
	 * typically 0.
	 * </p>
	 * @return bool true on success.
	 */
	public function liquidrescaleimage ($width, $height, $delta_x, $rigidity) {}

	/**
	 * Enciphers an image
	 * @link http://www.php.net/manual/en/imagick.encipherimage.php
	 * @param passphrase string <p>
	 * The passphrase
	 * </p>
	 * @return bool true on success.
	 */
	public function encipherimage ($passphrase) {}

	/**
	 * Deciphers an image
	 * @link http://www.php.net/manual/en/imagick.decipherimage.php
	 * @param passphrase string <p>
	 * The passphrase
	 * </p>
	 * @return bool true on success.
	 */
	public function decipherimage ($passphrase) {}

	/**
	 * Sets the gravity
	 * @link http://www.php.net/manual/en/imagick.setgravity.php
	 * @param gravity int <p>
	 * The gravity property. Refer to the list of 
	 * gravity constants.
	 * </p>
	 * @return bool 
	 */
	public function setgravity ($gravity) {}

	/**
	 * Gets the gravity
	 * @link http://www.php.net/manual/en/imagick.getgravity.php
	 * @return int the gravity property. Refer to the list of 
	 * gravity constants.
	 */
	public function getgravity () {}

	/**
	 * Gets channel range
	 * @link http://www.php.net/manual/en/imagick.getimagechannelrange.php
	 * @param channel int <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return array an array containing minima and maxima values of the channel(s).
	 */
	public function getimagechannelrange ($channel) {}

	/**
	 * Gets the image alpha channel
	 * @link http://www.php.net/manual/en/imagick.getimagealphachannel.php
	 * @return int a constant defining the current alpha channel value. Refer to this
	 * list of alpha channel constants.
	 */
	public function getimagealphachannel () {}

	/**
	 * Gets channel distortions
	 * @link http://www.php.net/manual/en/imagick.getimagechanneldistortions.php
	 * @param reference Imagick <p>
	 * Imagick object containing the reference image
	 * </p>
	 * @param metric int <p>
	 * Refer to this list of metric type constants.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return float a double describing the channel distortion.
	 */
	public function getimagechanneldistortions (Imagick $reference, $metric, $channel = null) {}

	/**
	 * Sets the image gravity
	 * @link http://www.php.net/manual/en/imagick.setimagegravity.php
	 * @param gravity int <p>
	 * The gravity property. Refer to the list of 
	 * gravity constants.
	 * </p>
	 * @return bool 
	 */
	public function setimagegravity ($gravity) {}

	/**
	 * Gets the image gravity
	 * @link http://www.php.net/manual/en/imagick.getimagegravity.php
	 * @return int the images gravity property. Refer to the list of 
	 * gravity constants.
	 */
	public function getimagegravity () {}

	/**
	 * Imports image pixels
	 * @link http://www.php.net/manual/en/imagick.importimagepixels.php
	 * @param x int <p>
	 * The image x position
	 * </p>
	 * @param y int <p>
	 * The image y position
	 * </p>
	 * @param width int <p>
	 * The image width
	 * </p>
	 * @param height int <p>
	 * The image height
	 * </p>
	 * @param map string <p>
	 * Map of pixel ordering as a string. This can be for example RGB.
	 * The value can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), 
	 * O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.
	 * </p>
	 * @param storage int <p>
	 * The pixel storage method. 
	 * Refer to this list of pixel constants.
	 * </p>
	 * @param pixels array <p>
	 * The array of pixels
	 * </p>
	 * @return bool true on success.
	 */
	public function importimagepixels ($x, $y, $width, $height, $map, $storage, array $pixels) {}

	/**
	 * Removes skew from the image
	 * @link http://www.php.net/manual/en/imagick.deskewimage.php
	 * @param threshold float <p>
	 * Deskew threshold
	 * </p>
	 * @return bool 
	 */
	public function deskewimage ($threshold) {}

	/**
	 * Segments an image
	 * @link http://www.php.net/manual/en/imagick.segmentimage.php
	 * @param COLORSPACE int <p>
	 * One of the COLORSPACE constants.
	 * </p>
	 * @param cluster_threshold float <p>
	 * A percentage describing minimum number of pixels 
	 * contained in hexedra before it is considered valid.
	 * </p>
	 * @param smooth_threshold float <p>
	 * Eliminates noise from the histogram.
	 * </p>
	 * @param verbose bool[optional] <p>
	 * Whether to output detailed information about recognised classes.
	 * </p>
	 * @return bool 
	 */
	public function segmentimage ($COLORSPACE, $cluster_threshold, $smooth_threshold, $verbose = null) {}

	/**
	 * Interpolates colors
	 * @link http://www.php.net/manual/en/imagick.sparsecolorimage.php
	 * @param SPARSE_METHOD int <p>
	 * Refer to this list of sparse method constants
	 * </p>
	 * @param arguments array <p>
	 * An array containing the coordinates. 
	 * The array is in format array(1,1, 2,45)
	 * </p>
	 * @param channel int[optional] 
	 * @return bool true on success.
	 */
	public function sparsecolorimage ($SPARSE_METHOD, array $arguments, $channel = null) {}

	/**
	 * Remaps image colors
	 * @link http://www.php.net/manual/en/imagick.remapimage.php
	 * @param replacement Imagick <p>
	 * An Imagick object containing the replacement colors
	 * </p>
	 * @param DITHER int <p>
	 * Refer to this list of dither method constants
	 * </p>
	 * @return bool true on success.
	 */
	public function remapimage (Imagick $replacement, $DITHER) {}

	/**
	 * Exports raw image pixels
	 * @link http://www.php.net/manual/en/imagick.exportimagepixels.php
	 * @param x int <p>
	 * X-coordinate of the exported area
	 * </p>
	 * @param y int <p>
	 * Y-coordinate of the exported area
	 * </p>
	 * @param width int <p>
	 * Width of the exported aread
	 * </p>
	 * @param height int <p>
	 * Height of the exported area
	 * </p>
	 * @param map string <p>
	 * Ordering of the exported pixels. For example "RGB". 
	 * Valid characters for the map are R, G, B, A, O, C, Y, M, K, I and P. 
	 * </p>
	 * @param STORAGE int <p>
	 * Refer to this list of pixel type constants
	 * </p>
	 * @return array an array containing the pixels values.
	 */
	public function exportimagepixels ($x, $y, $width, $height, $map, $STORAGE) {}

	/**
	 * The getImageChannelKurtosis purpose
	 * @link http://www.php.net/manual/en/imagick.getimagechannelkurtosis.php
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return array an array with kurtosis and skewness
	 * members.
	 */
	public function getimagechannelkurtosis ($channel = null) {}

	/**
	 * Applies a function on the image
	 * @link http://www.php.net/manual/en/imagick.functionimage.php
	 * @param function int <p>
	 * Refer to this list of function constants
	 * </p>
	 * @param arguments array <p>
	 * Array of arguments to pass to this function.
	 * </p>
	 * @param channel int[optional] 
	 * @return bool true on success.
	 */
	public function functionimage ($function, array $arguments, $channel = null) {}

	/**
	 * @param COLORSPACE
	 */
	public function transformimagecolorspace ($COLORSPACE) {}

	/**
	 * Replaces colors in the image
	 * @link http://www.php.net/manual/en/imagick.haldclutimage.php
	 * @param clut Imagick <p>
	 * Imagick object containing the Hald lookup image.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return bool true on success.
	 */
	public function haldclutimage (Imagick $clut, $channel = null) {}

	/**
	 * Get image artifact
	 * @link http://www.php.net/manual/en/imagick.getimageartifact.php
	 * @param artifact string <p>
	 * The name of the artifact
	 * </p>
	 * @return string the artifact value on success.
	 */
	public function getimageartifact ($artifact) {}

	/**
	 * Set image artifact
	 * @link http://www.php.net/manual/en/imagick.setimageartifact.php
	 * @param artifact string <p>
	 * The name of the artifact
	 * </p>
	 * @param value string <p>
	 * The value of the artifact
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageartifact ($artifact, $value) {}

	/**
	 * Delete image artifact
	 * @link http://www.php.net/manual/en/imagick.deleteimageartifact.php
	 * @param artifact string <p>
	 * The name of the artifact to delete
	 * </p>
	 * @return bool true on success.
	 */
	public function deleteimageartifact ($artifact) {}

	/**
	 * Gets the colorspace
	 * @link http://www.php.net/manual/en/imagick.getcolorspace.php
	 * @return int an integer which can be compared against COLORSPACE constants.
	 */
	public function getcolorspace () {}

	/**
	 * Set colorspace
	 * @link http://www.php.net/manual/en/imagick.setcolorspace.php
	 * @param COLORSPACE int <p>
	 * One of the COLORSPACE constants
	 * </p>
	 * @return bool true on success.
	 */
	public function setcolorspace ($COLORSPACE) {}

	/**
	 * The Imagick constructor
	 * @link http://www.php.net/manual/en/imagick.construct.php
	 * @param files[optional]
	 */
	public function __construct ($files = null) {}

	public function __tostring () {}

	/**
	 * Returns a MagickPixelIterator
	 * @link http://www.php.net/manual/en/imagick.getpixeliterator.php
	 * @return ImagickPixelIterator an ImagickPixelIterator on success.
	 */
	public function getpixeliterator () {}

	/**
	 * Get an ImagickPixelIterator for an image section
	 * @link http://www.php.net/manual/en/imagick.getpixelregioniterator.php
	 * @param x int <p>
	 * The x-coordinate of the region.
	 * </p>
	 * @param y int <p>
	 * The y-coordinate of the region.
	 * </p>
	 * @param columns int <p>
	 * The width of the region.
	 * </p>
	 * @param rows int <p>
	 * The height of the region.
	 * </p>
	 * @return ImagickPixelIterator an ImagickPixelIterator for an image section.
	 */
	public function getpixelregioniterator ($x, $y, $columns, $rows) {}

	/**
	 * Reads image from filename
	 * @link http://www.php.net/manual/en/imagick.readimage.php
	 * @param filename string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function readimage ($filename) {}

	/**
	 * @param filenames
	 */
	public function readimages ($filenames) {}

	/**
	 * Reads image from a binary string
	 * @link http://www.php.net/manual/en/imagick.readimageblob.php
	 * @param image string <p>
	 * </p>
	 * @param filename string[optional] 
	 * @return bool true on success.
	 */
	public function readimageblob ($image, $filename = null) {}

	/**
	 * Sets the format of a particular image
	 * @link http://www.php.net/manual/en/imagick.setimageformat.php
	 * @param format string <p>
	 * String presentation of the image format. Format support
	 * depends on the ImageMagick installation.
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageformat ($format) {}

	/**
	 * Scales the size of an image
	 * @link http://www.php.net/manual/en/imagick.scaleimage.php
	 * @param cols int <p>
	 * </p>
	 * @param rows int <p>
	 * </p>
	 * @param bestfit bool[optional] <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function scaleimage ($cols, $rows, $bestfit = null) {}

	/**
	 * Writes an image to the specified filename
	 * @link http://www.php.net/manual/en/imagick.writeimage.php
	 * @param filename string[optional] <p>
	 * Filename where to write the image. The extension of the filename
	 * defines the type of the file. 
	 * Format can be forced regardless of file extension using format: prefix,
	 * for example "jpg:test.png".
	 * </p>
	 * @return bool true on success.
	 */
	public function writeimage ($filename = null) {}

	/**
	 * Writes an image or image sequence
	 * @link http://www.php.net/manual/en/imagick.writeimages.php
	 * @param filename string <p>
	 * </p>
	 * @param adjoin bool <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function writeimages ($filename, $adjoin) {}

	/**
	 * Adds blur filter to image
	 * @link http://www.php.net/manual/en/imagick.blurimage.php
	 * @param radius float <p>
	 * Blur radius
	 * </p>
	 * @param sigma float <p>
	 * Standard deviation
	 * </p>
	 * @param channel int[optional] <p>
	 * The Channeltype
	 * constant. When not supplied, all channels are blurred.
	 * </p>
	 * @return bool true on success.
	 */
	public function blurimage ($radius, $sigma, $channel = null) {}

	/**
	 * Changes the size of an image
	 * @link http://www.php.net/manual/en/imagick.thumbnailimage.php
	 * @param columns int <p>
	 * Image width
	 * </p>
	 * @param rows int <p>
	 * Image height
	 * </p>
	 * @param bestfit bool[optional] <p>
	 * Whether to force maximum values
	 * </p>
	 * @param fill bool[optional] 
	 * @return bool true on success.
	 */
	public function thumbnailimage ($columns, $rows, $bestfit = null, $fill = null) {}

	/**
	 * Creates a crop thumbnail
	 * @link http://www.php.net/manual/en/imagick.cropthumbnailimage.php
	 * @param width int <p>
	 * The width of the thumbnail
	 * </p>
	 * @param height int <p>
	 * The Height of the thumbnail
	 * </p>
	 * @return bool true on success.
	 */
	public function cropthumbnailimage ($width, $height) {}

	/**
	 * Returns the filename of a particular image in a sequence
	 * @link http://www.php.net/manual/en/imagick.getimagefilename.php
	 * @return string a string with the filename of the image.
	 */
	public function getimagefilename () {}

	/**
	 * Sets the filename of a particular image
	 * @link http://www.php.net/manual/en/imagick.setimagefilename.php
	 * @param filename string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagefilename ($filename) {}

	/**
	 * Returns the format of a particular image in a sequence
	 * @link http://www.php.net/manual/en/imagick.getimageformat.php
	 * @return string a string containing the image format on success.
	 */
	public function getimageformat () {}

	public function getimagemimetype () {}

	/**
	 * Removes an image from the image list
	 * @link http://www.php.net/manual/en/imagick.removeimage.php
	 * @return bool true on success.
	 */
	public function removeimage () {}

	/**
	 * Destroys the Imagick object
	 * @link http://www.php.net/manual/en/imagick.destroy.php
	 * @return bool true on success.
	 */
	public function destroy () {}

	/**
	 * Clears all resources associated to Imagick object
	 * @link http://www.php.net/manual/en/imagick.clear.php
	 * @return bool true on success.
	 */
	public function clear () {}

	/**
	 * Makes an exact copy of the Imagick object
	 * @link http://www.php.net/manual/en/imagick.clone.php
	 * @return Imagick A copy of the Imagick object is returned.
	 */
	public function clone () {}

	/**
	 * Returns the image length in bytes
	 * @link http://www.php.net/manual/en/imagick.getimagesize.php
	 * @return int an int containing the current image size.
	 */
	public function getimagesize () {}

	/**
	 * Returns the image sequence as a blob
	 * @link http://www.php.net/manual/en/imagick.getimageblob.php
	 * @return string a string containing the image.
	 */
	public function getimageblob () {}

	/**
	 * Returns all image sequences as a blob
	 * @link http://www.php.net/manual/en/imagick.getimagesblob.php
	 * @return string a string containing the images. On failure, throws
	 * ImagickException.
	 */
	public function getimagesblob () {}

	/**
	 * Sets the Imagick iterator to the first image
	 * @link http://www.php.net/manual/en/imagick.setfirstiterator.php
	 * @return bool true on success.
	 */
	public function setfirstiterator () {}

	/**
	 * Sets the Imagick iterator to the last image
	 * @link http://www.php.net/manual/en/imagick.setlastiterator.php
	 * @return bool true on success.
	 */
	public function setlastiterator () {}

	public function resetiterator () {}

	/**
	 * Move to the previous image in the object
	 * @link http://www.php.net/manual/en/imagick.previousimage.php
	 * @return bool true on success.
	 */
	public function previousimage () {}

	/**
	 * Moves to the next image
	 * @link http://www.php.net/manual/en/imagick.nextimage.php
	 * @return bool true on success.
	 */
	public function nextimage () {}

	/**
	 * Checks if the object has a previous image
	 * @link http://www.php.net/manual/en/imagick.haspreviousimage.php
	 * @return bool true if the object has more images when traversing the list in the
	 * reverse direction, returns false if there are none.
	 */
	public function haspreviousimage () {}

	/**
	 * Checks if the object has more images
	 * @link http://www.php.net/manual/en/imagick.hasnextimage.php
	 * @return bool true if the object has more images when traversing the list in the
	 * forward direction, returns false if there are none.
	 */
	public function hasnextimage () {}

	/**
	 * Set the iterator position
	 * @link http://www.php.net/manual/en/imagick.setimageindex.php
	 * @param index int <p>
	 * The position to set the iterator to
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageindex ($index) {}

	/**
	 * Gets the index of the current active image
	 * @link http://www.php.net/manual/en/imagick.getimageindex.php
	 * @return int an integer containing the index of the image in the stack.
	 */
	public function getimageindex () {}

	/**
	 * Adds a comment to your image
	 * @link http://www.php.net/manual/en/imagick.commentimage.php
	 * @param comment string <p>
	 * The comment to add
	 * </p>
	 * @return bool true on success.
	 */
	public function commentimage ($comment) {}

	/**
	 * Extracts a region of the image
	 * @link http://www.php.net/manual/en/imagick.cropimage.php
	 * @param width int <p>
	 * The width of the crop
	 * </p>
	 * @param height int <p>
	 * The height of the crop
	 * </p>
	 * @param x int <p>
	 * The X coordinate of the cropped region's top left corner
	 * </p>
	 * @param y int <p>
	 * The Y coordinate of the cropped region's top left corner
	 * </p>
	 * @return bool true on success.
	 */
	public function cropimage ($width, $height, $x, $y) {}

	/**
	 * Adds a label to an image
	 * @link http://www.php.net/manual/en/imagick.labelimage.php
	 * @param label string <p>
	 * The label to add
	 * </p>
	 * @return bool true on success.
	 */
	public function labelimage ($label) {}

	/**
	 * Gets the width and height as an associative array
	 * @link http://www.php.net/manual/en/imagick.getimagegeometry.php
	 * @return array an array with the width/height of the image.
	 */
	public function getimagegeometry () {}

	/**
	 * Renders the ImagickDraw object on the current image
	 * @link http://www.php.net/manual/en/imagick.drawimage.php
	 * @param draw ImagickDraw <p>
	 * The drawing operations to render on the image.
	 * </p>
	 * @return bool true on success.
	 */
	public function drawimage (ImagickDraw $draw) {}

	/**
	 * Sets the image compression quality
	 * @link http://www.php.net/manual/en/imagick.setimagecompressionquality.php
	 * @param quality int <p>
	 * The image compression quality as an integer
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagecompressionquality ($quality) {}

	/**
	 * Gets the current image's compression quality
	 * @link http://www.php.net/manual/en/imagick.getimagecompressionquality.php
	 * @return int integer describing the images compression quality
	 */
	public function getimagecompressionquality () {}

	/**
	 * Annotates an image with text
	 * @link http://www.php.net/manual/en/imagick.annotateimage.php
	 * @param draw_settings ImagickDraw <p>
	 * The ImagickDraw object that contains settings for drawing the text
	 * </p>
	 * @param x float <p>
	 * Horizontal offset in pixels to the left of text
	 * </p>
	 * @param y float <p>
	 * Vertical offset in pixels to the baseline of text
	 * </p>
	 * @param angle float <p>
	 * The angle at which to write the text
	 * </p>
	 * @param text string <p>
	 * The string to draw
	 * </p>
	 * @return bool true on success.
	 */
	public function annotateimage (ImagickDraw $draw_settings, $x, $y, $angle, $text) {}

	/**
	 * Composite one image onto another
	 * @link http://www.php.net/manual/en/imagick.compositeimage.php
	 * @param composite_object Imagick <p>
	 * Imagick object which holds the composite image
	 * </p>
	 * @param composite int 
	 * @param x int <p>
	 * The column offset of the composited image
	 * </p>
	 * @param y int <p>
	 * The row offset of the composited image
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function compositeimage (Imagick $composite_object, $composite, $x, $y, $channel = null) {}

	/**
	 * Control the brightness, saturation, and hue
	 * @link http://www.php.net/manual/en/imagick.modulateimage.php
	 * @param brightness float <p>
	 * </p>
	 * @param saturation float <p>
	 * </p>
	 * @param hue float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function modulateimage ($brightness, $saturation, $hue) {}

	/**
	 * Gets the number of unique colors in the image
	 * @link http://www.php.net/manual/en/imagick.getimagecolors.php
	 * @return int true on success.
	 */
	public function getimagecolors () {}

	/**
	 * Creates a composite image
	 * @link http://www.php.net/manual/en/imagick.montageimage.php
	 * @param draw ImagickDraw <p>
	 * The font name, size, and color are obtained from this object.
	 * </p>
	 * @param tile_geometry string <p>
	 * The number of tiles per row and page (e.g. 6x4+0+0).
	 * </p>
	 * @param thumbnail_geometry string <p>
	 * Preferred image size and border size of each thumbnail
	 * (e.g. 120x120+4+3>).
	 * </p>
	 * @param mode int <p>
	 * Thumbnail framing mode, see Montage Mode constants.
	 * </p>
	 * @param frame string <p>
	 * Surround the image with an ornamental border (e.g. 15x15+3+3). The
	 * frame color is that of the thumbnail's matte color.
	 * </p>
	 * @return Imagick true on success.
	 */
	public function montageimage (ImagickDraw $draw, $tile_geometry, $thumbnail_geometry, $mode, $frame) {}

	/**
	 * Identifies an image and fetches attributes
	 * @link http://www.php.net/manual/en/imagick.identifyimage.php
	 * @param appendRawOutput bool[optional] <p>
	 * </p>
	 * @return array Identifies an image and returns the attributes. Attributes include
	 * the image width, height, size, and others.
	 */
	public function identifyimage ($appendRawOutput = null) {}

	/**
	 * Changes the value of individual pixels based on a threshold
	 * @link http://www.php.net/manual/en/imagick.thresholdimage.php
	 * @param threshold float <p>
	 * </p>
	 * @param channel int[optional] <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function thresholdimage ($threshold, $channel = null) {}

	/**
	 * Selects a threshold for each pixel based on a range of intensity
	 * @link http://www.php.net/manual/en/imagick.adaptivethresholdimage.php
	 * @param width int <p>
	 * Width of the local neighborhood.
	 * </p>
	 * @param height int <p>
	 * Height of the local neighborhood.
	 * </p>
	 * @param offset int <p>
	 * The mean offset
	 * </p>
	 * @return bool true on success.
	 */
	public function adaptivethresholdimage ($width, $height, $offset) {}

	/**
	 * Forces all pixels below the threshold into black
	 * @link http://www.php.net/manual/en/imagick.blackthresholdimage.php
	 * @param threshold mixed <p>
	 * The threshold below which everything turns black
	 * </p>
	 * @return bool true on success.
	 */
	public function blackthresholdimage ($threshold) {}

	/**
	 * Force all pixels above the threshold into white
	 * @link http://www.php.net/manual/en/imagick.whitethresholdimage.php
	 * @param threshold mixed <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function whitethresholdimage ($threshold) {}

	/**
	 * Append a set of images
	 * @link http://www.php.net/manual/en/imagick.appendimages.php
	 * @param stack bool <p>
	 * Whether to stack the images vertically.
	 * By default (or if false is specified) images are stacked left-to-right.
	 * If stack is true, images are stacked top-to-bottom.
	 * </p>
	 * @return Imagick Imagick instance on success.
	 */
	public function appendimages ($stack) {}

	/**
	 * Simulates a charcoal drawing
	 * @link http://www.php.net/manual/en/imagick.charcoalimage.php
	 * @param radius float <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel
	 * </p>
	 * @param sigma float <p>
	 * The standard deviation of the Gaussian, in pixels
	 * </p>
	 * @return bool true on success.
	 */
	public function charcoalimage ($radius, $sigma) {}

	/**
	 * Enhances the contrast of a color image
	 * @link http://www.php.net/manual/en/imagick.normalizeimage.php
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function normalizeimage ($channel = null) {}

	/**
	 * Simulates an oil painting
	 * @link http://www.php.net/manual/en/imagick.oilpaintimage.php
	 * @param radius float <p>
	 * The radius of the circular neighborhood.
	 * </p>
	 * @return bool true on success.
	 */
	public function oilpaintimage ($radius) {}

	/**
	 * Reduces the image to a limited number of color level
	 * @link http://www.php.net/manual/en/imagick.posterizeimage.php
	 * @param levels int <p>
	 * </p>
	 * @param dither bool <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function posterizeimage ($levels, $dither) {}

	/**
	 * Radial blurs an image
	 * @link http://www.php.net/manual/en/imagick.radialblurimage.php
	 * @param angle float <p>
	 * </p>
	 * @param channel int[optional] <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function radialblurimage ($angle, $channel = null) {}

	/**
	 * Creates a simulated 3d button-like effect
	 * @link http://www.php.net/manual/en/imagick.raiseimage.php
	 * @param width int <p>
	 * </p>
	 * @param height int <p>
	 * </p>
	 * @param x int <p>
	 * </p>
	 * @param y int <p>
	 * </p>
	 * @param raise bool <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function raiseimage ($width, $height, $x, $y, $raise) {}

	/**
	 * Resample image to desired resolution
	 * @link http://www.php.net/manual/en/imagick.resampleimage.php
	 * @param x_resolution float <p>
	 * </p>
	 * @param y_resolution float <p>
	 * </p>
	 * @param filter int <p>
	 * </p>
	 * @param blur float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function resampleimage ($x_resolution, $y_resolution, $filter, $blur) {}

	/**
	 * Scales an image
	 * @link http://www.php.net/manual/en/imagick.resizeimage.php
	 * @param columns int <p>
	 * Width of the image
	 * </p>
	 * @param rows int <p>
	 * Height of the image
	 * </p>
	 * @param filter int <p>
	 * Refer to the list of filter constants.
	 * </p>
	 * @param blur float <p>
	 * The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.
	 * </p>
	 * @param bestfit bool[optional] <p>
	 * Optional fit parameter.
	 * </p>
	 * @return bool true on success.
	 */
	public function resizeimage ($columns, $rows, $filter, $blur, $bestfit = null) {}

	/**
	 * Offsets an image
	 * @link http://www.php.net/manual/en/imagick.rollimage.php
	 * @param x int <p>
	 * The X offset.
	 * </p>
	 * @param y int <p>
	 * The Y offset.
	 * </p>
	 * @return bool true on success.
	 */
	public function rollimage ($x, $y) {}

	/**
	 * Rotates an image
	 * @link http://www.php.net/manual/en/imagick.rotateimage.php
	 * @param background mixed <p>
	 * The background color
	 * </p>
	 * @param degrees float <p>
	 * Rotation angle, in degrees. The rotation angle is interpreted as the
	 * number of degrees to rotate the image clockwise.
	 * </p>
	 * @return bool true on success.
	 */
	public function rotateimage ($background, $degrees) {}

	/**
	 * Scales an image with pixel sampling
	 * @link http://www.php.net/manual/en/imagick.sampleimage.php
	 * @param columns int <p>
	 * </p>
	 * @param rows int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function sampleimage ($columns, $rows) {}

	/**
	 * Applies a solarizing effect to the image
	 * @link http://www.php.net/manual/en/imagick.solarizeimage.php
	 * @param threshold int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function solarizeimage ($threshold) {}

	/**
	 * Simulates an image shadow
	 * @link http://www.php.net/manual/en/imagick.shadowimage.php
	 * @param opacity float <p>
	 * </p>
	 * @param sigma float <p>
	 * </p>
	 * @param x int <p>
	 * </p>
	 * @param y int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function shadowimage ($opacity, $sigma, $x, $y) {}

	/**
	 * @param key
	 * @param value
	 */
	public function setimageattribute ($key, $value) {}

	/**
	 * Sets the image background color
	 * @link http://www.php.net/manual/en/imagick.setimagebackgroundcolor.php
	 * @param background mixed <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagebackgroundcolor ($background) {}

	/**
	 * Sets the image composite operator
	 * @link http://www.php.net/manual/en/imagick.setimagecompose.php
	 * @param compose int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagecompose ($compose) {}

	/**
	 * Sets the image compression
	 * @link http://www.php.net/manual/en/imagick.setimagecompression.php
	 * @param compression int <p>
	 * One of the COMPRESSION constants
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagecompression ($compression) {}

	/**
	 * Sets the image delay
	 * @link http://www.php.net/manual/en/imagick.setimagedelay.php
	 * @param delay int <p>
	 * The amount of time expressed in 'ticks' that the image should be
	 * displayed for. For animated GIFs there are 100 ticks per second, so a
	 * value of 20 would be 20/100 of a second aka 1/5th of a second.
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagedelay ($delay) {}

	/**
	 * Sets the image depth
	 * @link http://www.php.net/manual/en/imagick.setimagedepth.php
	 * @param depth int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagedepth ($depth) {}

	/**
	 * Sets the image gamma
	 * @link http://www.php.net/manual/en/imagick.setimagegamma.php
	 * @param gamma float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagegamma ($gamma) {}

	/**
	 * Sets the image iterations
	 * @link http://www.php.net/manual/en/imagick.setimageiterations.php
	 * @param iterations int <p>
	 * The number of iterations the image should loop over. Set to '0' to loop
	 * continuously.
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageiterations ($iterations) {}

	/**
	 * Sets the image matte color
	 * @link http://www.php.net/manual/en/imagick.setimagemattecolor.php
	 * @param matte mixed <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagemattecolor ($matte) {}

	/**
	 * Sets the page geometry of the image
	 * @link http://www.php.net/manual/en/imagick.setimagepage.php
	 * @param width int <p>
	 * </p>
	 * @param height int <p>
	 * </p>
	 * @param x int <p>
	 * </p>
	 * @param y int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagepage ($width, $height, $x, $y) {}

	/**
	 * @param filename
	 */
	public function setimageprogressmonitor ($filename) {}

	/**
	 * Sets the image resolution
	 * @link http://www.php.net/manual/en/imagick.setimageresolution.php
	 * @param x_resolution float <p>
	 * </p>
	 * @param y_resolution float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageresolution ($x_resolution, $y_resolution) {}

	/**
	 * Sets the image scene
	 * @link http://www.php.net/manual/en/imagick.setimagescene.php
	 * @param scene int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagescene ($scene) {}

	/**
	 * Sets the image ticks-per-second
	 * @link http://www.php.net/manual/en/imagick.setimagetickspersecond.php
	 * @param ticks_per_second int <p>
	 * The duration for which an image should be displayed expressed in ticks
	 * per second.
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagetickspersecond ($ticks_per_second) {}

	/**
	 * Sets the image type
	 * @link http://www.php.net/manual/en/imagick.setimagetype.php
	 * @param image_type int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagetype ($image_type) {}

	/**
	 * Sets the image units of resolution
	 * @link http://www.php.net/manual/en/imagick.setimageunits.php
	 * @param units int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageunits ($units) {}

	/**
	 * Sharpens an image
	 * @link http://www.php.net/manual/en/imagick.sharpenimage.php
	 * @param radius float <p>
	 * </p>
	 * @param sigma float <p>
	 * </p>
	 * @param channel int[optional] <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function sharpenimage ($radius, $sigma, $channel = null) {}

	/**
	 * Shaves pixels from the image edges
	 * @link http://www.php.net/manual/en/imagick.shaveimage.php
	 * @param columns int <p>
	 * </p>
	 * @param rows int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function shaveimage ($columns, $rows) {}

	/**
	 * Creating a parallelogram
	 * @link http://www.php.net/manual/en/imagick.shearimage.php
	 * @param background mixed <p>
	 * The background color
	 * </p>
	 * @param x_shear float <p>
	 * The number of degrees to shear on the x axis
	 * </p>
	 * @param y_shear float <p>
	 * The number of degrees to shear on the y axis
	 * </p>
	 * @return bool true on success.
	 */
	public function shearimage ($background, $x_shear, $y_shear) {}

	/**
	 * Splices a solid color into the image
	 * @link http://www.php.net/manual/en/imagick.spliceimage.php
	 * @param width int <p>
	 * </p>
	 * @param height int <p>
	 * </p>
	 * @param x int <p>
	 * </p>
	 * @param y int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function spliceimage ($width, $height, $x, $y) {}

	/**
	 * Fetch basic attributes about the image
	 * @link http://www.php.net/manual/en/imagick.pingimage.php
	 * @param filename string <p>
	 * The filename to read the information from.
	 * </p>
	 * @return bool true on success.
	 */
	public function pingimage ($filename) {}

	/**
	 * Reads image from open filehandle
	 * @link http://www.php.net/manual/en/imagick.readimagefile.php
	 * @param filehandle resource <p>
	 * </p>
	 * @param fileName string[optional] <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function readimagefile ($filehandle, $fileName = null) {}

	/**
	 * Displays an image
	 * @link http://www.php.net/manual/en/imagick.displayimage.php
	 * @param servername string <p>
	 * The X server name
	 * </p>
	 * @return bool true on success.
	 */
	public function displayimage ($servername) {}

	/**
	 * Displays an image or image sequence
	 * @link http://www.php.net/manual/en/imagick.displayimages.php
	 * @param servername string <p>
	 * The X server name
	 * </p>
	 * @return bool true on success.
	 */
	public function displayimages ($servername) {}

	/**
	 * Randomly displaces each pixel in a block
	 * @link http://www.php.net/manual/en/imagick.spreadimage.php
	 * @param radius float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function spreadimage ($radius) {}

	/**
	 * Swirls the pixels about the center of the image
	 * @link http://www.php.net/manual/en/imagick.swirlimage.php
	 * @param degrees float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function swirlimage ($degrees) {}

	/**
	 * Strips an image of all profiles and comments
	 * @link http://www.php.net/manual/en/imagick.stripimage.php
	 * @return bool true on success.
	 */
	public function stripimage () {}

	/**
	 * Returns formats supported by Imagick
	 * @link http://www.php.net/manual/en/imagick.queryformats.php
	 * @param pattern string[optional] <p>
	 * </p>
	 * @return array an array containing the formats supported by Imagick.
	 */
	public function queryformats ($pattern = null) {}

	/**
	 * Returns the configured fonts
	 * @link http://www.php.net/manual/en/imagick.queryfonts.php
	 * @param pattern string[optional] <p>
	 * The query pattern
	 * </p>
	 * @return array an array containing the configured fonts.
	 */
	public function queryfonts ($pattern = null) {}

	/**
	 * Returns an array representing the font metrics
	 * @link http://www.php.net/manual/en/imagick.queryfontmetrics.php
	 * @param properties ImagickDraw <p>
	 * ImagickDraw object containing font properties
	 * </p>
	 * @param text string <p>
	 * The text
	 * </p>
	 * @param multiline bool[optional] <p>
	 * Multiline parameter. If left empty it is autodetected
	 * </p>
	 * @return array a multi-dimensional array representing the font metrics.
	 */
	public function queryfontmetrics (ImagickDraw $properties, $text, $multiline = null) {}

	/**
	 * Hides a digital watermark within the image
	 * @link http://www.php.net/manual/en/imagick.steganoimage.php
	 * @param watermark_wand Imagick <p>
	 * </p>
	 * @param offset int <p>
	 * </p>
	 * @return Imagick true on success.
	 */
	public function steganoimage (Imagick $watermark_wand, $offset) {}

	/**
	 * Adds random noise to the image
	 * @link http://www.php.net/manual/en/imagick.addnoiseimage.php
	 * @param noise_type int <p>
	 * The type of the noise. Refer to this list of
	 * noise constants.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return bool true on success.
	 */
	public function addnoiseimage ($noise_type, $channel = null) {}

	/**
	 * Simulates motion blur
	 * @link http://www.php.net/manual/en/imagick.motionblurimage.php
	 * @param radius float <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * </p>
	 * @param sigma float <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param angle float <p>
	 * Apply the effect along this angle.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * The channel argument affects only if Imagick is compiled against ImageMagick version
	 * 6.4.4 or greater.
	 * </p>
	 * @return bool true on success.
	 */
	public function motionblurimage ($radius, $sigma, $angle, $channel = null) {}

	/**
	 * Forms a mosaic from images
	 * @link http://www.php.net/manual/en/imagick.mosaicimages.php
	 * @return Imagick true on success.
	 */
	public function mosaicimages () {}

	/**
	 * Method morphs a set of images
	 * @link http://www.php.net/manual/en/imagick.morphimages.php
	 * @param number_frames int <p>
	 * The number of in-between images to generate.
	 * </p>
	 * @return Imagick This method returns a new Imagick object on success.
	 * &imagick.imagickexception.throw;
	 */
	public function morphimages ($number_frames) {}

	/**
	 * Scales an image proportionally to half its size
	 * @link http://www.php.net/manual/en/imagick.minifyimage.php
	 * @return bool true on success.
	 */
	public function minifyimage () {}

	/**
	 * Transforms an image
	 * @link http://www.php.net/manual/en/imagick.affinetransformimage.php
	 * @param matrix ImagickDraw <p>
	 * The affine matrix
	 * </p>
	 * @return bool true on success.
	 */
	public function affinetransformimage (ImagickDraw $matrix) {}

	/**
	 * Average a set of images
	 * @link http://www.php.net/manual/en/imagick.averageimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function averageimages () {}

	/**
	 * Surrounds the image with a border
	 * @link http://www.php.net/manual/en/imagick.borderimage.php
	 * @param bordercolor mixed <p>
	 * ImagickPixel object or a string containing the border color
	 * </p>
	 * @param width int <p>
	 * Border width
	 * </p>
	 * @param height int <p>
	 * Border height
	 * </p>
	 * @return bool true on success.
	 */
	public function borderimage ($bordercolor, $width, $height) {}

	/**
	 * Removes a region of an image and trims
	 * @link http://www.php.net/manual/en/imagick.chopimage.php
	 * @param width int <p>
	 * Width of the chopped area
	 * </p>
	 * @param height int <p>
	 * Height of the chopped area
	 * </p>
	 * @param x int <p>
	 * X origo of the chopped area
	 * </p>
	 * @param y int <p>
	 * Y origo of the chopped area
	 * </p>
	 * @return bool true on success.
	 */
	public function chopimage ($width, $height, $x, $y) {}

	/**
	 * Clips along the first path from the 8BIM profile
	 * @link http://www.php.net/manual/en/imagick.clipimage.php
	 * @return bool true on success.
	 */
	public function clipimage () {}

	/**
	 * Clips along the named paths from the 8BIM profile
	 * @link http://www.php.net/manual/en/imagick.clippathimage.php
	 * @param pathname string <p>
	 * The name of the path
	 * </p>
	 * @param inside bool <p>
	 * If true later operations take effect inside clipping path.
	 * Otherwise later operations take effect outside clipping path.
	 * </p>
	 * @return bool true on success.
	 */
	public function clippathimage ($pathname, $inside) {}

	/**
	 * @param pathname
	 * @param inside
	 */
	public function clipimagepath ($pathname, $inside) {}

	/**
	 * Composites a set of images
	 * @link http://www.php.net/manual/en/imagick.coalesceimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function coalesceimages () {}

	/**
	 * Changes the color value of any pixel that matches target
	 * @link http://www.php.net/manual/en/imagick.colorfloodfillimage.php
	 * @param fill mixed <p>
	 * ImagickPixel object containing the fill color
	 * </p>
	 * @param fuzz float <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at
	 * intensities of 100 and 102 respectively are now interpreted as the
	 * same color for the purposes of the floodfill.
	 * </p>
	 * @param bordercolor mixed <p>
	 * ImagickPixel object containing the border color
	 * </p>
	 * @param x int <p>
	 * X start position of the floodfill
	 * </p>
	 * @param y int <p>
	 * Y start position of the floodfill
	 * </p>
	 * @return bool true on success.
	 */
	public function colorfloodfillimage ($fill, $fuzz, $bordercolor, $x, $y) {}

	/**
	 * Blends the fill color with the image
	 * @link http://www.php.net/manual/en/imagick.colorizeimage.php
	 * @param colorize mixed <p>
	 * ImagickPixel object or a string containing the colorize color
	 * </p>
	 * @param opacity mixed <p>
	 * ImagickPixel object or an float containing the opacity value. 
	 * 1.0 is fully opaque and 0.0 is fully transparent.
	 * </p>
	 * @return bool true on success.
	 */
	public function colorizeimage ($colorize, $opacity) {}

	/**
	 * Returns the difference in one or more images
	 * @link http://www.php.net/manual/en/imagick.compareimagechannels.php
	 * @param image Imagick <p>
	 * Imagick object containing the image to compare.
	 * </p>
	 * @param channelType int <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @param metricType int <p>
	 * One of the metric type constants.
	 * </p>
	 * @return array Array consisting of new_wand and
	 * distortion.
	 */
	public function compareimagechannels (Imagick $image, $channelType, $metricType) {}

	/**
	 * Compares an image to a reconstructed image
	 * @link http://www.php.net/manual/en/imagick.compareimages.php
	 * @param compare Imagick <p>
	 * An image to compare to.
	 * </p>
	 * @param metric int <p>
	 * Provide a valid metric type constant. Refer to this
	 * list of metric constants.
	 * </p>
	 * @return array true on success.
	 */
	public function compareimages (Imagick $compare, $metric) {}

	/**
	 * Change the contrast of the image
	 * @link http://www.php.net/manual/en/imagick.contrastimage.php
	 * @param sharpen bool <p>
	 * The sharpen value
	 * </p>
	 * @return bool true on success.
	 */
	public function contrastimage ($sharpen) {}

	/**
	 * Combines one or more images into a single image
	 * @link http://www.php.net/manual/en/imagick.combineimages.php
	 * @param channelType int <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return Imagick true on success.
	 */
	public function combineimages ($channelType) {}

	/**
	 * Applies a custom convolution kernel to the image
	 * @link http://www.php.net/manual/en/imagick.convolveimage.php
	 * @param kernel array <p>
	 * The convolution kernel
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function convolveimage (array $kernel, $channel = null) {}

	/**
	 * Displaces an image's colormap
	 * @link http://www.php.net/manual/en/imagick.cyclecolormapimage.php
	 * @param displace int <p>
	 * The amount to displace the colormap.
	 * </p>
	 * @return bool true on success.
	 */
	public function cyclecolormapimage ($displace) {}

	/**
	 * Returns certain pixel differences between images
	 * @link http://www.php.net/manual/en/imagick.deconstructimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function deconstructimages () {}

	/**
	 * Reduces the speckle noise in an image
	 * @link http://www.php.net/manual/en/imagick.despeckleimage.php
	 * @return bool true on success.
	 */
	public function despeckleimage () {}

	/**
	 * Enhance edges within the image
	 * @link http://www.php.net/manual/en/imagick.edgeimage.php
	 * @param radius float <p>
	 * The radius of the operation.
	 * </p>
	 * @return bool true on success.
	 */
	public function edgeimage ($radius) {}

	/**
	 * Returns a grayscale image with a three-dimensional effect
	 * @link http://www.php.net/manual/en/imagick.embossimage.php
	 * @param radius float <p>
	 * The radius of the effect
	 * </p>
	 * @param sigma float <p>
	 * The sigma of the effect
	 * </p>
	 * @return bool true on success.
	 */
	public function embossimage ($radius, $sigma) {}

	/**
	 * Improves the quality of a noisy image
	 * @link http://www.php.net/manual/en/imagick.enhanceimage.php
	 * @return bool true on success.
	 */
	public function enhanceimage () {}

	/**
	 * Equalizes the image histogram
	 * @link http://www.php.net/manual/en/imagick.equalizeimage.php
	 * @return bool true on success.
	 */
	public function equalizeimage () {}

	/**
	 * Applies an expression to an image
	 * @link http://www.php.net/manual/en/imagick.evaluateimage.php
	 * @param op int <p>
	 * The evaluation operator
	 * </p>
	 * @param constant float <p>
	 * The value of the operator
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function evaluateimage ($op, $constant, $channel = null) {}

	/**
	 * Merges a sequence of images
	 * @link http://www.php.net/manual/en/imagick.flattenimages.php
	 * @return Imagick true on success.
	 */
	public function flattenimages () {}

	/**
	 * Creates a vertical mirror image
	 * @link http://www.php.net/manual/en/imagick.flipimage.php
	 * @return bool true on success.
	 */
	public function flipimage () {}

	/**
	 * Creates a horizontal mirror image
	 * @link http://www.php.net/manual/en/imagick.flopimage.php
	 * @return bool true on success.
	 */
	public function flopimage () {}

	/**
	 * Adds a simulated three-dimensional border
	 * @link http://www.php.net/manual/en/imagick.frameimage.php
	 * @param matte_color mixed <p>
	 * ImagickPixel object or a string representing the matte color
	 * </p>
	 * @param width int <p>
	 * The width of the border
	 * </p>
	 * @param height int <p>
	 * The height of the border
	 * </p>
	 * @param inner_bevel int <p>
	 * The inner bevel width
	 * </p>
	 * @param outer_bevel int <p>
	 * The outer bevel width
	 * </p>
	 * @return bool true on success.
	 */
	public function frameimage ($matte_color, $width, $height, $inner_bevel, $outer_bevel) {}

	/**
	 * Evaluate expression for each pixel in the image
	 * @link http://www.php.net/manual/en/imagick.fximage.php
	 * @param expression string <p>
	 * The expression.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return Imagick true on success.
	 */
	public function fximage ($expression, $channel = null) {}

	/**
	 * Gamma-corrects an image
	 * @link http://www.php.net/manual/en/imagick.gammaimage.php
	 * @param gamma float <p>
	 * The amount of gamma-correction.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function gammaimage ($gamma, $channel = null) {}

	/**
	 * Blurs an image
	 * @link http://www.php.net/manual/en/imagick.gaussianblurimage.php
	 * @param radius float <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * </p>
	 * @param sigma float <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function gaussianblurimage ($radius, $sigma, $channel = null) {}

	/**
	 * @param key
	 */
	public function getimageattribute ($key) {}

	/**
	 * Returns the image background color
	 * @link http://www.php.net/manual/en/imagick.getimagebackgroundcolor.php
	 * @return ImagickPixel an ImagickPixel set to the background color of the image.
	 */
	public function getimagebackgroundcolor () {}

	/**
	 * Returns the chromaticy blue primary point
	 * @link http://www.php.net/manual/en/imagick.getimageblueprimary.php
	 * @return array Array consisting of "x" and "y" coordinates of point.
	 */
	public function getimageblueprimary () {}

	/**
	 * Returns the image border color
	 * @link http://www.php.net/manual/en/imagick.getimagebordercolor.php
	 * @return ImagickPixel true on success.
	 */
	public function getimagebordercolor () {}

	/**
	 * Gets the depth for a particular image channel
	 * @link http://www.php.net/manual/en/imagick.getimagechanneldepth.php
	 * @param channel int <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. &imagick.default.channel.info;
	 * </p>
	 * @return int true on success.
	 */
	public function getimagechanneldepth ($channel) {}

	/**
	 * Compares image channels of an image to a reconstructed image
	 * @link http://www.php.net/manual/en/imagick.getimagechanneldistortion.php
	 * @param reference Imagick <p>
	 * Imagick object to compare to.
	 * </p>
	 * @param channel int <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @param metric int <p>
	 * One of the metric type constants.
	 * </p>
	 * @return float true on success.
	 */
	public function getimagechanneldistortion (Imagick $reference, $channel, $metric) {}

	/**
	 * Gets the extrema for one or more image channels
	 * @link http://www.php.net/manual/en/imagick.getimagechannelextrema.php
	 * @param channel int <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return array true on success.
	 */
	public function getimagechannelextrema ($channel) {}

	/**
	 * Gets the mean and standard deviation
	 * @link http://www.php.net/manual/en/imagick.getimagechannelmean.php
	 * @param channel int <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return array true on success.
	 */
	public function getimagechannelmean ($channel) {}

	/**
	 * Returns statistics for each channel in the image
	 * @link http://www.php.net/manual/en/imagick.getimagechannelstatistics.php
	 * @return array true on success.
	 */
	public function getimagechannelstatistics () {}

	/**
	 * Returns the color of the specified colormap index
	 * @link http://www.php.net/manual/en/imagick.getimagecolormapcolor.php
	 * @param index int <p>
	 * The offset into the image colormap.
	 * </p>
	 * @return ImagickPixel true on success.
	 */
	public function getimagecolormapcolor ($index) {}

	/**
	 * Gets the image colorspace
	 * @link http://www.php.net/manual/en/imagick.getimagecolorspace.php
	 * @return int true on success.
	 */
	public function getimagecolorspace () {}

	/**
	 * Returns the composite operator associated with the image
	 * @link http://www.php.net/manual/en/imagick.getimagecompose.php
	 * @return int true on success.
	 */
	public function getimagecompose () {}

	/**
	 * Gets the image delay
	 * @link http://www.php.net/manual/en/imagick.getimagedelay.php
	 * @return int the image delay.
	 */
	public function getimagedelay () {}

	/**
	 * Gets the image depth
	 * @link http://www.php.net/manual/en/imagick.getimagedepth.php
	 * @return int The image depth.
	 */
	public function getimagedepth () {}

	/**
	 * Compares an image to a reconstructed image
	 * @link http://www.php.net/manual/en/imagick.getimagedistortion.php
	 * @param reference MagickWand <p>
	 * Imagick object to compare to.
	 * </p>
	 * @param metric int <p>
	 * One of the metric type constants.
	 * </p>
	 * @return float the distortion metric used on the image (or the best guess
	 * thereof).
	 */
	public function getimagedistortion ($reference, $metric) {}

	/**
	 * Gets the extrema for the image
	 * @link http://www.php.net/manual/en/imagick.getimageextrema.php
	 * @return array an associative array with the keys "min" and "max".
	 */
	public function getimageextrema () {}

	/**
	 * Gets the image disposal method
	 * @link http://www.php.net/manual/en/imagick.getimagedispose.php
	 * @return int the dispose method on success.
	 */
	public function getimagedispose () {}

	/**
	 * Gets the image gamma
	 * @link http://www.php.net/manual/en/imagick.getimagegamma.php
	 * @return float the image gamma on success.
	 */
	public function getimagegamma () {}

	/**
	 * Returns the chromaticy green primary point
	 * @link http://www.php.net/manual/en/imagick.getimagegreenprimary.php
	 * @return array an array with the keys "x" and "y" on success, throws an
	 * ImagickException on failure.
	 */
	public function getimagegreenprimary () {}

	/**
	 * Returns the image height
	 * @link http://www.php.net/manual/en/imagick.getimageheight.php
	 * @return int the image height in pixels.
	 */
	public function getimageheight () {}

	/**
	 * Gets the image histogram
	 * @link http://www.php.net/manual/en/imagick.getimagehistogram.php
	 * @return array the image histogram as an array of ImagickPixel objects.
	 */
	public function getimagehistogram () {}

	/**
	 * Gets the image interlace scheme
	 * @link http://www.php.net/manual/en/imagick.getimageinterlacescheme.php
	 * @return int the interlace scheme as an integer on success.
	 * &imagick.imagickexception.throw;
	 */
	public function getimageinterlacescheme () {}

	/**
	 * Gets the image iterations
	 * @link http://www.php.net/manual/en/imagick.getimageiterations.php
	 * @return int the image iterations as an integer.
	 */
	public function getimageiterations () {}

	/**
	 * Returns the image matte color
	 * @link http://www.php.net/manual/en/imagick.getimagemattecolor.php
	 * @return ImagickPixel ImagickPixel object on success.
	 */
	public function getimagemattecolor () {}

	/**
	 * Returns the page geometry
	 * @link http://www.php.net/manual/en/imagick.getimagepage.php
	 * @return array the page geometry associated with the image in an array with the
	 * keys "width", "height", "x", and "y".
	 */
	public function getimagepage () {}

	/**
	 * Returns the color of the specified pixel
	 * @link http://www.php.net/manual/en/imagick.getimagepixelcolor.php
	 * @param x int <p>
	 * The x-coordinate of the pixel
	 * </p>
	 * @param y int <p>
	 * The y-coordinate of the pixel
	 * </p>
	 * @return ImagickPixel an ImagickPixel instance for the color at the coordinates given.
	 */
	public function getimagepixelcolor ($x, $y) {}

	/**
	 * Returns the named image profile
	 * @link http://www.php.net/manual/en/imagick.getimageprofile.php
	 * @param name string <p>
	 * The name of the profile to return.
	 * </p>
	 * @return string a string containing the image profile.
	 */
	public function getimageprofile ($name) {}

	/**
	 * Returns the chromaticity red primary point
	 * @link http://www.php.net/manual/en/imagick.getimageredprimary.php
	 * @return array the chromaticity red primary point as an array with the keys "x"
	 * and "y".
	 * &imagick.imagickexception.throw;
	 */
	public function getimageredprimary () {}

	/**
	 * Gets the image rendering intent
	 * @link http://www.php.net/manual/en/imagick.getimagerenderingintent.php
	 * @return int the image rendering intent.
	 */
	public function getimagerenderingintent () {}

	/**
	 * Gets the image X and Y resolution
	 * @link http://www.php.net/manual/en/imagick.getimageresolution.php
	 * @return array the resolution as an array.
	 */
	public function getimageresolution () {}

	/**
	 * Gets the image scene
	 * @link http://www.php.net/manual/en/imagick.getimagescene.php
	 * @return int the image scene.
	 */
	public function getimagescene () {}

	/**
	 * Generates an SHA-256 message digest
	 * @link http://www.php.net/manual/en/imagick.getimagesignature.php
	 * @return string a string containing the SHA-256 hash of the file.
	 */
	public function getimagesignature () {}

	/**
	 * Gets the image ticks-per-second
	 * @link http://www.php.net/manual/en/imagick.getimagetickspersecond.php
	 * @return int the image ticks-per-second.
	 */
	public function getimagetickspersecond () {}

	/**
	 * Gets the potential image type
	 * @link http://www.php.net/manual/en/imagick.getimagetype.php
	 * @return int the potential image type.
	 * imagick::IMGTYPE_UNDEFINED
	 * imagick::IMGTYPE_BILEVEL
	 * imagick::IMGTYPE_GRAYSCALE
	 * imagick::IMGTYPE_GRAYSCALEMATTE
	 * imagick::IMGTYPE_PALETTE
	 * imagick::IMGTYPE_PALETTEMATTE
	 * imagick::IMGTYPE_TRUECOLOR
	 * imagick::IMGTYPE_TRUECOLORMATTE
	 * imagick::IMGTYPE_COLORSEPARATION
	 * imagick::IMGTYPE_COLORSEPARATIONMATTE
	 * imagick::IMGTYPE_OPTIMIZE
	 */
	public function getimagetype () {}

	/**
	 * Gets the image units of resolution
	 * @link http://www.php.net/manual/en/imagick.getimageunits.php
	 * @return int the image units of resolution.
	 */
	public function getimageunits () {}

	/**
	 * Returns the virtual pixel method
	 * @link http://www.php.net/manual/en/imagick.getimagevirtualpixelmethod.php
	 * @return int the virtual pixel method on success.
	 */
	public function getimagevirtualpixelmethod () {}

	/**
	 * Returns the chromaticity white point
	 * @link http://www.php.net/manual/en/imagick.getimagewhitepoint.php
	 * @return array the chromaticity white point as an associative array with the keys
	 * "x" and "y".
	 */
	public function getimagewhitepoint () {}

	/**
	 * Returns the image width
	 * @link http://www.php.net/manual/en/imagick.getimagewidth.php
	 * @return int the image width.
	 */
	public function getimagewidth () {}

	/**
	 * Returns the number of images in the object
	 * @link http://www.php.net/manual/en/imagick.getnumberimages.php
	 * @return int the number of images associated with Imagick object.
	 */
	public function getnumberimages () {}

	/**
	 * Gets the image total ink density
	 * @link http://www.php.net/manual/en/imagick.getimagetotalinkdensity.php
	 * @return float the image total ink density of the image.
	 * &imagick.imagickexception.throw;
	 */
	public function getimagetotalinkdensity () {}

	/**
	 * Extracts a region of the image
	 * @link http://www.php.net/manual/en/imagick.getimageregion.php
	 * @param width int <p>
	 * The width of the extracted region.
	 * </p>
	 * @param height int <p>
	 * The height of the extracted region.
	 * </p>
	 * @param x int <p>
	 * X-coordinate of the top-left corner of the extracted region.
	 * </p>
	 * @param y int <p>
	 * Y-coordinate of the top-left corner of the extracted region.
	 * </p>
	 * @return Imagick Extracts a region of the image and returns it as a new wand.
	 */
	public function getimageregion ($width, $height, $x, $y) {}

	/**
	 * Creates a new image as a copy
	 * @link http://www.php.net/manual/en/imagick.implodeimage.php
	 * @param radius float <p>
	 * The radius of the implode
	 * </p>
	 * @return bool true on success.
	 */
	public function implodeimage ($radius) {}

	/**
	 * Adjusts the levels of an image
	 * @link http://www.php.net/manual/en/imagick.levelimage.php
	 * @param blackPoint float <p>
	 * The image black point
	 * </p>
	 * @param gamma float <p>
	 * The gamma value
	 * </p>
	 * @param whitePoint float <p>
	 * The image white point
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function levelimage ($blackPoint, $gamma, $whitePoint, $channel = null) {}

	/**
	 * Scales an image proportionally 2x
	 * @link http://www.php.net/manual/en/imagick.magnifyimage.php
	 * @return bool true on success.
	 */
	public function magnifyimage () {}

	/**
	 * Replaces the colors of an image with the closest color from a reference image.
	 * @link http://www.php.net/manual/en/imagick.mapimage.php
	 * @param map Imagick <p>
	 * </p>
	 * @param dither bool <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function mapimage (Imagick $map, $dither) {}

	/**
	 * Changes the transparency value of a color
	 * @link http://www.php.net/manual/en/imagick.mattefloodfillimage.php
	 * @param alpha float <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @param fuzz float <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @param bordercolor mixed <p>
	 * An ImagickPixel object or string representing the border color.
	 * </p>
	 * @param x int <p>
	 * The starting x coordinate of the operation.
	 * </p>
	 * @param y int <p>
	 * The starting y coordinate of the operation.
	 * </p>
	 * @return bool true on success.
	 */
	public function mattefloodfillimage ($alpha, $fuzz, $bordercolor, $x, $y) {}

	/**
	 * Applies a digital filter
	 * @link http://www.php.net/manual/en/imagick.medianfilterimage.php
	 * @param radius float <p>
	 * The radius of the pixel neighborhood.
	 * </p>
	 * @return bool true on success.
	 */
	public function medianfilterimage ($radius) {}

	/**
	 * Negates the colors in the reference image
	 * @link http://www.php.net/manual/en/imagick.negateimage.php
	 * @param gray bool <p>
	 * Whether to only negate grayscale pixels within the image.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function negateimage ($gray, $channel = null) {}

	/**
	 * Change any pixel that matches color
	 * @link http://www.php.net/manual/en/imagick.paintopaqueimage.php
	 * @param target mixed <p>
	 * Change this target color to the fill color within the image. An
	 * ImagickPixel object or a string representing the target color.
	 * </p>
	 * @param fill mixed <p>
	 * An ImagickPixel object or a string representing the fill color.
	 * </p>
	 * @param fuzz float <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @param channel int[optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool true on success.
	 */
	public function paintopaqueimage ($target, $fill, $fuzz, $channel = null) {}

	/**
	 * Changes any pixel that matches color with the color defined by fill
	 * @link http://www.php.net/manual/en/imagick.painttransparentimage.php
	 * @param target mixed <p>
	 * Change this target color to specified opacity value within the image.
	 * </p>
	 * @param alpha float <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully 
	 * transparent.
	 * </p>
	 * @param fuzz float <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @return bool true on success.
	 */
	public function painttransparentimage ($target, $alpha, $fuzz) {}

	/**
	 * Quickly pin-point appropriate parameters for image processing
	 * @link http://www.php.net/manual/en/imagick.previewimages.php
	 * @param preview int <p>
	 * Preview type. See Preview type constants
	 * </p>
	 * @return bool true on success.
	 */
	public function previewimages ($preview) {}

	/**
	 * Adds or removes a profile from an image
	 * @link http://www.php.net/manual/en/imagick.profileimage.php
	 * @param name string <p>
	 * </p>
	 * @param profile string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function profileimage ($name, $profile) {}

	/**
	 * Analyzes the colors within a reference image
	 * @link http://www.php.net/manual/en/imagick.quantizeimage.php
	 * @param numberColors int <p>
	 * </p>
	 * @param colorspace int <p>
	 * </p>
	 * @param treedepth int <p>
	 * </p>
	 * @param dither bool <p>
	 * </p>
	 * @param measureError bool <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function quantizeimage ($numberColors, $colorspace, $treedepth, $dither, $measureError) {}

	/**
	 * Analyzes the colors within a sequence of images
	 * @link http://www.php.net/manual/en/imagick.quantizeimages.php
	 * @param numberColors int <p>
	 * </p>
	 * @param colorspace int <p>
	 * </p>
	 * @param treedepth int <p>
	 * </p>
	 * @param dither bool <p>
	 * </p>
	 * @param measureError bool <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function quantizeimages ($numberColors, $colorspace, $treedepth, $dither, $measureError) {}

	/**
	 * Smooths the contours of an image
	 * @link http://www.php.net/manual/en/imagick.reducenoiseimage.php
	 * @param radius float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function reducenoiseimage ($radius) {}

	/**
	 * Removes the named image profile and returns it
	 * @link http://www.php.net/manual/en/imagick.removeimageprofile.php
	 * @param name string <p>
	 * </p>
	 * @return string a string containing the profile of the image.
	 */
	public function removeimageprofile ($name) {}

	/**
	 * Separates a channel from the image
	 * @link http://www.php.net/manual/en/imagick.separateimagechannel.php
	 * @param channel int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function separateimagechannel ($channel) {}

	/**
	 * Sepia tones an image
	 * @link http://www.php.net/manual/en/imagick.sepiatoneimage.php
	 * @param threshold float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function sepiatoneimage ($threshold) {}

	/**
	 * Sets the image bias for any method that convolves an image
	 * @link http://www.php.net/manual/en/imagick.setimagebias.php
	 * @param bias float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagebias ($bias) {}

	/**
	 * Sets the image chromaticity blue primary point
	 * @link http://www.php.net/manual/en/imagick.setimageblueprimary.php
	 * @param x float <p>
	 * </p>
	 * @param y float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageblueprimary ($x, $y) {}

	/**
	 * Sets the image border color
	 * @link http://www.php.net/manual/en/imagick.setimagebordercolor.php
	 * @param border mixed <p>
	 * The border color
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagebordercolor ($border) {}

	/**
	 * Sets the depth of a particular image channel
	 * @link http://www.php.net/manual/en/imagick.setimagechanneldepth.php
	 * @param channel int <p>
	 * </p>
	 * @param depth int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagechanneldepth ($channel, $depth) {}

	/**
	 * Sets the color of the specified colormap index
	 * @link http://www.php.net/manual/en/imagick.setimagecolormapcolor.php
	 * @param index int <p>
	 * </p>
	 * @param color ImagickPixel <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagecolormapcolor ($index, ImagickPixel $color) {}

	/**
	 * Sets the image colorspace
	 * @link http://www.php.net/manual/en/imagick.setimagecolorspace.php
	 * @param colorspace int <p>
	 * One of the COLORSPACE constants
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagecolorspace ($colorspace) {}

	/**
	 * Sets the image disposal method
	 * @link http://www.php.net/manual/en/imagick.setimagedispose.php
	 * @param dispose int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagedispose ($dispose) {}

	/**
	 * Sets the image size
	 * @link http://www.php.net/manual/en/imagick.setimageextent.php
	 * @param columns int <p>
	 * </p>
	 * @param rows int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageextent ($columns, $rows) {}

	/**
	 * Sets the image chromaticity green primary point
	 * @link http://www.php.net/manual/en/imagick.setimagegreenprimary.php
	 * @param x float <p>
	 * </p>
	 * @param y float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagegreenprimary ($x, $y) {}

	/**
	 * Sets the image compression
	 * @link http://www.php.net/manual/en/imagick.setimageinterlacescheme.php
	 * @param interlace_scheme int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageinterlacescheme ($interlace_scheme) {}

	/**
	 * Adds a named profile to the Imagick object
	 * @link http://www.php.net/manual/en/imagick.setimageprofile.php
	 * @param name string <p>
	 * </p>
	 * @param profile string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageprofile ($name, $profile) {}

	/**
	 * Sets the image chromaticity red primary point
	 * @link http://www.php.net/manual/en/imagick.setimageredprimary.php
	 * @param x float <p>
	 * </p>
	 * @param y float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimageredprimary ($x, $y) {}

	/**
	 * Sets the image rendering intent
	 * @link http://www.php.net/manual/en/imagick.setimagerenderingintent.php
	 * @param rendering_intent int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagerenderingintent ($rendering_intent) {}

	/**
	 * Sets the image virtual pixel method
	 * @link http://www.php.net/manual/en/imagick.setimagevirtualpixelmethod.php
	 * @param method int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagevirtualpixelmethod ($method) {}

	/**
	 * Sets the image chromaticity white point
	 * @link http://www.php.net/manual/en/imagick.setimagewhitepoint.php
	 * @param x float <p>
	 * </p>
	 * @param y float <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setimagewhitepoint ($x, $y) {}

	/**
	 * Adjusts the contrast of an image
	 * @link http://www.php.net/manual/en/imagick.sigmoidalcontrastimage.php
	 * @param sharpen bool <p>
	 * If true increase the contrast, if false decrease the contrast.
	 * </p>
	 * @param alpha float <p>
	 * The amount of contrast to apply. 1 is very little, 5 is a significant amount, 20 is extreme.
	 * </p>
	 * @param beta float <p>
	 * Where the midpoint of the gradient will be. This value should be in the range 0 to 1 - mutliplied by the quantum value for ImageMagick.
	 * </p>
	 * @param channel int[optional] <p>
	 * Which color channels the contrast will be applied to.
	 * </p>
	 * @return bool true on success.
	 */
	public function sigmoidalcontrastimage ($sharpen, $alpha, $beta, $channel = null) {}

	/**
	 * Composites two images
	 * @link http://www.php.net/manual/en/imagick.stereoimage.php
	 * @param offset_wand Imagick <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function stereoimage (Imagick $offset_wand) {}

	/**
	 * Repeatedly tiles the texture image
	 * @link http://www.php.net/manual/en/imagick.textureimage.php
	 * @param texture_wand Imagick <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function textureimage (Imagick $texture_wand) {}

	/**
	 * Applies a color vector to each pixel in the image
	 * @link http://www.php.net/manual/en/imagick.tintimage.php
	 * @param tint mixed <p>
	 * </p>
	 * @param opacity mixed <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function tintimage ($tint, $opacity) {}

	/**
	 * Sharpens an image
	 * @link http://www.php.net/manual/en/imagick.unsharpmaskimage.php
	 * @param radius float <p>
	 * </p>
	 * @param sigma float <p>
	 * </p>
	 * @param amount float <p>
	 * </p>
	 * @param threshold float <p>
	 * </p>
	 * @param channel int[optional] <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function unsharpmaskimage ($radius, $sigma, $amount, $threshold, $channel = null) {}

	/**
	 * Returns a new Imagick object
	 * @link http://www.php.net/manual/en/imagick.getimage.php
	 * @return Imagick a new Imagick object with the current image sequence.
	 */
	public function getimage () {}

	/**
	 * Adds new image to Imagick object image list
	 * @link http://www.php.net/manual/en/imagick.addimage.php
	 * @param source Imagick <p>
	 * The source Imagick object
	 * </p>
	 * @return bool true on success.
	 */
	public function addimage (Imagick $source) {}

	/**
	 * Replaces image in the object
	 * @link http://www.php.net/manual/en/imagick.setimage.php
	 * @param replace Imagick <p>
	 * The replace Imagick object
	 * </p>
	 * @return bool true on success.
	 */
	public function setimage (Imagick $replace) {}

	/**
	 * Creates a new image
	 * @link http://www.php.net/manual/en/imagick.newimage.php
	 * @param cols int <p>
	 * Columns in the new image
	 * </p>
	 * @param rows int <p>
	 * Rows in the new image
	 * </p>
	 * @param background mixed <p>
	 * The background color used for this image
	 * </p>
	 * @param format string[optional] <p>
	 * Image format. This parameter was added in Imagick version 2.0.1.
	 * </p>
	 * @return bool true on success.
	 */
	public function newimage ($cols, $rows, $background, $format = null) {}

	/**
	 * Creates a new image
	 * @link http://www.php.net/manual/en/imagick.newpseudoimage.php
	 * @param columns int <p>
	 * columns in the new image
	 * </p>
	 * @param rows int <p>
	 * rows in the new image
	 * </p>
	 * @param pseudoString string <p>
	 * string containing pseudo image definition.
	 * </p>
	 * @return bool true on success.
	 */
	public function newpseudoimage ($columns, $rows, $pseudoString) {}

	/**
	 * Gets the object compression type
	 * @link http://www.php.net/manual/en/imagick.getcompression.php
	 * @return int the compression constant
	 */
	public function getcompression () {}

	/**
	 * Gets the object compression quality
	 * @link http://www.php.net/manual/en/imagick.getcompressionquality.php
	 * @return int integer describing the compression quality
	 */
	public function getcompressionquality () {}

	/**
	 * Returns the ImageMagick API copyright as a string
	 * @link http://www.php.net/manual/en/imagick.getcopyright.php
	 * @return string a string containing the copyright notice of Imagemagick and
	 * Magickwand C API.
	 */
	public function getcopyright () {}

	/**
	 * The filename associated with an image sequence
	 * @link http://www.php.net/manual/en/imagick.getfilename.php
	 * @return string a string on success.
	 */
	public function getfilename () {}

	/**
	 * Returns the format of the Imagick object
	 * @link http://www.php.net/manual/en/imagick.getformat.php
	 * @return string the format of the image.
	 */
	public function getformat () {}

	/**
	 * Returns the ImageMagick home URL
	 * @link http://www.php.net/manual/en/imagick.gethomeurl.php
	 * @return string a link to the imagemagick homepage.
	 */
	public function gethomeurl () {}

	/**
	 * Gets the object interlace scheme
	 * @link http://www.php.net/manual/en/imagick.getinterlacescheme.php
	 * @return int Gets the wand interlace
	 * scheme.
	 */
	public function getinterlacescheme () {}

	/**
	 * Returns a value associated with the specified key
	 * @link http://www.php.net/manual/en/imagick.getoption.php
	 * @param key string <p>
	 * The name of the option
	 * </p>
	 * @return string a value associated with a wand and the specified key.
	 */
	public function getoption ($key) {}

	/**
	 * Returns the ImageMagick package name
	 * @link http://www.php.net/manual/en/imagick.getpackagename.php
	 * @return string the ImageMagick package name as a string.
	 */
	public function getpackagename () {}

	/**
	 * Returns the page geometry
	 * @link http://www.php.net/manual/en/imagick.getpage.php
	 * @return array the page geometry associated with the Imagick object in
	 * an associative array with the keys "width", "height", "x", and "y",
	 * throwing ImagickException on error.
	 */
	public function getpage () {}

	/**
	 * Gets the quantum depth
	 * @link http://www.php.net/manual/en/imagick.getquantumdepth.php
	 * @return array the Imagick quantum depth as a string.
	 */
	public function getquantumdepth () {}

	/**
	 * Returns the Imagick quantum range
	 * @link http://www.php.net/manual/en/imagick.getquantumrange.php
	 * @return array an associative array containing the quantum range as an
	 * integer ("quantumRangeLong") and as a 
	 * string ("quantumRangeString").
	 */
	public function getquantumrange () {}

	/**
	 * Returns the ImageMagick release date
	 * @link http://www.php.net/manual/en/imagick.getreleasedate.php
	 * @return string the ImageMagick release date as a string.
	 */
	public function getreleasedate () {}

	/**
	 * Returns the specified resource's memory usage
	 * @link http://www.php.net/manual/en/imagick.getresource.php
	 * @param type int <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @return int the specified resource's memory usage in megabytes.
	 */
	public function getresource ($type) {}

	/**
	 * Returns the specified resource limit
	 * @link http://www.php.net/manual/en/imagick.getresourcelimit.php
	 * @param type int <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @return int the specified resource limit in megabytes.
	 */
	public function getresourcelimit ($type) {}

	/**
	 * Gets the horizontal and vertical sampling factor
	 * @link http://www.php.net/manual/en/imagick.getsamplingfactors.php
	 * @return array an associative array with the horizontal and vertical sampling
	 * factors of the image.
	 */
	public function getsamplingfactors () {}

	/**
	 * Returns the size associated with the Imagick object
	 * @link http://www.php.net/manual/en/imagick.getsize.php
	 * @return array the size associated with the Imagick object as an array with the
	 * keys "columns" and "rows".
	 */
	public function getsize () {}

	/**
	 * Returns the ImageMagick API version
	 * @link http://www.php.net/manual/en/imagick.getversion.php
	 * @return array the ImageMagick API version as a string and as a number.
	 */
	public function getversion () {}

	/**
	 * Sets the object's default background color
	 * @link http://www.php.net/manual/en/imagick.setbackgroundcolor.php
	 * @param background mixed <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setbackgroundcolor ($background) {}

	/**
	 * Sets the object's default compression type
	 * @link http://www.php.net/manual/en/imagick.setcompression.php
	 * @param compression int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setcompression ($compression) {}

	/**
	 * Sets the object's default compression quality
	 * @link http://www.php.net/manual/en/imagick.setcompressionquality.php
	 * @param quality int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setcompressionquality ($quality) {}

	/**
	 * Sets the filename before you read or write the image
	 * @link http://www.php.net/manual/en/imagick.setfilename.php
	 * @param filename string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setfilename ($filename) {}

	/**
	 * Sets the format of the Imagick object
	 * @link http://www.php.net/manual/en/imagick.setformat.php
	 * @param format string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setformat ($format) {}

	/**
	 * Sets the image compression
	 * @link http://www.php.net/manual/en/imagick.setinterlacescheme.php
	 * @param interlace_scheme int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setinterlacescheme ($interlace_scheme) {}

	/**
	 * Set an option
	 * @link http://www.php.net/manual/en/imagick.setoption.php
	 * @param key string <p>
	 * </p>
	 * @param value string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setoption ($key, $value) {}

	/**
	 * Sets the page geometry of the Imagick object
	 * @link http://www.php.net/manual/en/imagick.setpage.php
	 * @param width int <p>
	 * </p>
	 * @param height int <p>
	 * </p>
	 * @param x int <p>
	 * </p>
	 * @param y int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setpage ($width, $height, $x, $y) {}

	/**
	 * Sets the limit for a particular resource in megabytes
	 * @link http://www.php.net/manual/en/imagick.setresourcelimit.php
	 * @param type int <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @param limit int <p>
	 * The resource limit. The unit depends on the type of the resource being limited.
	 * </p>
	 * @return bool true on success.
	 */
	public function setresourcelimit ($type, $limit) {}

	/**
	 * Sets the image resolution
	 * @link http://www.php.net/manual/en/imagick.setresolution.php
	 * @param x_resolution float <p>
	 * The horizontal resolution.
	 * </p>
	 * @param y_resolution float <p>
	 * The vertical resolution.
	 * </p>
	 * @return bool true on success.
	 */
	public function setresolution ($x_resolution, $y_resolution) {}

	/**
	 * Sets the image sampling factors
	 * @link http://www.php.net/manual/en/imagick.setsamplingfactors.php
	 * @param factors array <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setsamplingfactors (array $factors) {}

	/**
	 * Sets the size of the Imagick object
	 * @link http://www.php.net/manual/en/imagick.setsize.php
	 * @param columns int <p>
	 * </p>
	 * @param rows int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setsize ($columns, $rows) {}

	/**
	 * Sets the image type attribute
	 * @link http://www.php.net/manual/en/imagick.settype.php
	 * @param image_type int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function settype ($image_type) {}

	public function key () {}

	public function next () {}

	public function rewind () {}

	/**
	 * Checks if the current item is valid
	 * @link http://www.php.net/manual/en/imagick.valid.php
	 * @return bool true on success.
	 */
	public function valid () {}

	/**
	 * Returns a reference to the current Imagick object
	 * @link http://www.php.net/manual/en/imagick.current.php
	 * @return Imagick self on success.
	 */
	public function current () {}

}

class ImagickDraw  {

	public function resetvectorgraphics () {}

	public function gettextkerning () {}

	/**
	 * @param kerning
	 */
	public function settextkerning ($kerning) {}

	public function gettextinterwordspacing () {}

	/**
	 * @param spacing
	 */
	public function settextinterwordspacing ($spacing) {}

	public function gettextinterlinespacing () {}

	/**
	 * @param spacing
	 */
	public function settextinterlinespacing ($spacing) {}

	/**
	 * The ImagickDraw constructor
	 * @link http://www.php.net/manual/en/imagickdraw.construct.php
	 */
	public function __construct () {}

	/**
	 * Sets the fill color to be used for drawing filled objects
	 * @link http://www.php.net/manual/en/imagickdraw.setfillcolor.php
	 * @param fill_pixel ImagickPixel <p>
	 * ImagickPixel to use to set the color
	 * </p>
	 * @return bool 
	 */
	public function setfillcolor (ImagickPixel $fill_pixel) {}

	/**
	 * Sets the opacity to use when drawing using the fill color or fill texture
	 * @link http://www.php.net/manual/en/imagickdraw.setfillalpha.php
	 * @param opacity float <p>
	 * fill alpha
	 * </p>
	 * @return bool 
	 */
	public function setfillalpha ($opacity) {}

	/**
	 * @param x_resolution
	 * @param y_resolution
	 */
	public function setresolution ($x_resolution, $y_resolution) {}

	/**
	 * Sets the color used for stroking object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokecolor.php
	 * @param stroke_pixel ImagickPixel <p>
	 * the stroke color
	 * </p>
	 * @return bool 
	 */
	public function setstrokecolor (ImagickPixel $stroke_pixel) {}

	/**
	 * Specifies the opacity of stroked object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokealpha.php
	 * @param opacity float <p>
	 * opacity
	 * </p>
	 * @return bool 
	 */
	public function setstrokealpha ($opacity) {}

	/**
	 * Sets the width of the stroke used to draw object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokewidth.php
	 * @param stroke_width float <p>
	 * stroke width
	 * </p>
	 * @return bool 
	 */
	public function setstrokewidth ($stroke_width) {}

	/**
	 * Clears the ImagickDraw
	 * @link http://www.php.net/manual/en/imagickdraw.clear.php
	 * @return bool an ImagickDraw object.
	 */
	public function clear () {}

	/**
	 * Draws a circle
	 * @link http://www.php.net/manual/en/imagickdraw.circle.php
	 * @param ox float <p>
	 * origin x coordinate
	 * </p>
	 * @param oy float <p>
	 * origin y coordinate
	 * </p>
	 * @param px float <p>
	 * perimeter x coordinate
	 * </p>
	 * @param py float <p>
	 * perimeter y coordinate
	 * </p>
	 * @return bool 
	 */
	public function circle ($ox, $oy, $px, $py) {}

	/**
	 * Draws text on the image
	 * @link http://www.php.net/manual/en/imagickdraw.annotation.php
	 * @param x float <p>
	 * The x coordinate where text is drawn
	 * </p>
	 * @param y float <p>
	 * The y coordinate where text is drawn
	 * </p>
	 * @param text string <p>
	 * The text to draw on the image
	 * </p>
	 * @return bool 
	 */
	public function annotation ($x, $y, $text) {}

	/**
	 * Controls whether text is antialiased
	 * @link http://www.php.net/manual/en/imagickdraw.settextantialias.php
	 * @param antiAlias bool <p>
	 * </p>
	 * @return bool 
	 */
	public function settextantialias ($antiAlias) {}

	/**
	 * Specifies the text code set
	 * @link http://www.php.net/manual/en/imagickdraw.settextencoding.php
	 * @param encoding string <p>
	 * the encoding name
	 * </p>
	 * @return bool 
	 */
	public function settextencoding ($encoding) {}

	/**
	 * Sets the fully-specified font to use when annotating with text
	 * @link http://www.php.net/manual/en/imagickdraw.setfont.php
	 * @param font_name string <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setfont ($font_name) {}

	/**
	 * Sets the font family to use when annotating with text
	 * @link http://www.php.net/manual/en/imagickdraw.setfontfamily.php
	 * @param font_family string <p>
	 * the font family
	 * </p>
	 * @return bool true on success.
	 */
	public function setfontfamily ($font_family) {}

	/**
	 * Sets the font pointsize to use when annotating with text
	 * @link http://www.php.net/manual/en/imagickdraw.setfontsize.php
	 * @param pointsize float <p>
	 * the point size
	 * </p>
	 * @return bool 
	 */
	public function setfontsize ($pointsize) {}

	/**
	 * Sets the font style to use when annotating with text
	 * @link http://www.php.net/manual/en/imagickdraw.setfontstyle.php
	 * @param style int <p>
	 * STYLETYPE_ constant
	 * </p>
	 * @return bool 
	 */
	public function setfontstyle ($style) {}

	/**
	 * Sets the font weight
	 * @link http://www.php.net/manual/en/imagickdraw.setfontweight.php
	 * @param font_weight int <p>
	 * </p>
	 * @return bool 
	 */
	public function setfontweight ($font_weight) {}

	/**
	 * Returns the font
	 * @link http://www.php.net/manual/en/imagickdraw.getfont.php
	 * @return string a string on success and false if no font is set.
	 */
	public function getfont () {}

	/**
	 * Returns the font family
	 * @link http://www.php.net/manual/en/imagickdraw.getfontfamily.php
	 * @return string the font family currently selected or false if font family is not set.
	 */
	public function getfontfamily () {}

	/**
	 * Returns the font pointsize
	 * @link http://www.php.net/manual/en/imagickdraw.getfontsize.php
	 * @return float the font size associated with the current ImagickDraw object.
	 */
	public function getfontsize () {}

	/**
	 * Returns the font style
	 * @link http://www.php.net/manual/en/imagickdraw.getfontstyle.php
	 * @return int the font style constant (STYLE_) associated with the ImagickDraw object 
	 * or 0 if no style is set.
	 */
	public function getfontstyle () {}

	/**
	 * Returns the font weight
	 * @link http://www.php.net/manual/en/imagickdraw.getfontweight.php
	 * @return int an int on success and 0 if no weight is set.
	 */
	public function getfontweight () {}

	/**
	 * Frees all associated resources
	 * @link http://www.php.net/manual/en/imagickdraw.destroy.php
	 * @return bool 
	 */
	public function destroy () {}

	/**
	 * Draws a rectangle
	 * @link http://www.php.net/manual/en/imagickdraw.rectangle.php
	 * @param x1 float <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param y1 float <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param x2 float <p>
	 * x coordinate of the bottom right corner
	 * </p>
	 * @param y2 float <p>
	 * y coordinate of the bottom right corner
	 * </p>
	 * @return bool 
	 */
	public function rectangle ($x1, $y1, $x2, $y2) {}

	/**
	 * Draws a rounded rectangle
	 * @link http://www.php.net/manual/en/imagickdraw.roundrectangle.php
	 * @param x1 float <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param y1 float <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param x2 float <p>
	 * x coordinate of the bottom right 
	 * </p>
	 * @param y2 float <p>
	 * y coordinate of the bottom right 
	 * </p>
	 * @param rx float <p>
	 * x rounding
	 * </p>
	 * @param ry float <p>
	 * y rounding
	 * </p>
	 * @return bool 
	 */
	public function roundrectangle ($x1, $y1, $x2, $y2, $rx, $ry) {}

	/**
	 * Draws an ellipse on the image
	 * @link http://www.php.net/manual/en/imagickdraw.ellipse.php
	 * @param ox float <p>
	 * </p>
	 * @param oy float <p>
	 * </p>
	 * @param rx float <p>
	 * </p>
	 * @param ry float <p>
	 * </p>
	 * @param start float <p>
	 * </p>
	 * @param end float <p>
	 * </p>
	 * @return bool 
	 */
	public function ellipse ($ox, $oy, $rx, $ry, $start, $end) {}

	/**
	 * Skews the current coordinate system in the horizontal direction
	 * @link http://www.php.net/manual/en/imagickdraw.skewx.php
	 * @param degrees float <p>
	 * degrees to skew
	 * </p>
	 * @return bool 
	 */
	public function skewx ($degrees) {}

	/**
	 * Skews the current coordinate system in the vertical direction
	 * @link http://www.php.net/manual/en/imagickdraw.skewy.php
	 * @param degrees float <p>
	 * degrees to skew
	 * </p>
	 * @return bool 
	 */
	public function skewy ($degrees) {}

	/**
	 * Applies a translation to the current coordinate system
	 * @link http://www.php.net/manual/en/imagickdraw.translate.php
	 * @param x float <p>
	 * horizontal translation
	 * </p>
	 * @param y float <p>
	 * vertical translation
	 * </p>
	 * @return bool 
	 */
	public function translate ($x, $y) {}

	/**
	 * Draws a line
	 * @link http://www.php.net/manual/en/imagickdraw.line.php
	 * @param sx float <p>
	 * starting x coordinate
	 * </p>
	 * @param sy float <p>
	 * starting y coordinate
	 * </p>
	 * @param ex float <p>
	 * ending x coordinate
	 * </p>
	 * @param ey float <p>
	 * ending y coordinate
	 * </p>
	 * @return bool 
	 */
	public function line ($sx, $sy, $ex, $ey) {}

	/**
	 * Draws an arc
	 * @link http://www.php.net/manual/en/imagickdraw.arc.php
	 * @param sx float <p>
	 * Starting x ordinate of bounding rectangle
	 * </p>
	 * @param sy float <p>
	 * starting y ordinate of bounding rectangle
	 * </p>
	 * @param ex float <p>
	 * ending x ordinate of bounding rectangle
	 * </p>
	 * @param ey float <p>
	 * ending y ordinate of bounding rectangle
	 * </p>
	 * @param sd float <p>
	 * starting degrees of rotation
	 * </p>
	 * @param ed float <p>
	 * ending degrees of rotation
	 * </p>
	 * @return bool 
	 */
	public function arc ($sx, $sy, $ex, $ey, $sd, $ed) {}

	/**
	 * Paints on the image's opacity channel
	 * @link http://www.php.net/manual/en/imagickdraw.matte.php
	 * @param x float <p>
	 * x coordinate of the matte
	 * </p>
	 * @param y float <p>
	 * y coordinate of the matte
	 * </p>
	 * @param paintMethod int <p>
	 * PAINT_ constant
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function matte ($x, $y, $paintMethod) {}

	/**
	 * Draws a polygon
	 * @link http://www.php.net/manual/en/imagickdraw.polygon.php
	 * @param coordinates array <p>
	 * multidimensional array like array( array( 'x' => 3, 'y' => 4 ), array( 'x' => 2, 'y' => 6 ) );
	 * </p>
	 * @return bool true on success.
	 */
	public function polygon (array $coordinates) {}

	/**
	 * Draws a point
	 * @link http://www.php.net/manual/en/imagickdraw.point.php
	 * @param x float <p>
	 * point's x coordinate
	 * </p>
	 * @param y float <p>
	 * point's y coordinate
	 * </p>
	 * @return bool 
	 */
	public function point ($x, $y) {}

	/**
	 * Returns the text decoration
	 * @link http://www.php.net/manual/en/imagickdraw.gettextdecoration.php
	 * @return int one of the DECORATION_ constants
	 * and 0 if no decoration is set.
	 */
	public function gettextdecoration () {}

	/**
	 * Returns the code set used for text annotations
	 * @link http://www.php.net/manual/en/imagickdraw.gettextencoding.php
	 * @return string a string specifying the code set
	 * or false if text encoding is not set.
	 */
	public function gettextencoding () {}

	public function getfontstretch () {}

	/**
	 * Sets the font stretch to use when annotating with text
	 * @link http://www.php.net/manual/en/imagickdraw.setfontstretch.php
	 * @param fontStretch int <p>
	 * STRETCH_ constant
	 * </p>
	 * @return bool 
	 */
	public function setfontstretch ($fontStretch) {}

	/**
	 * Controls whether stroked outlines are antialiased
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokeantialias.php
	 * @param stroke_antialias bool <p>
	 * the antialias setting
	 * </p>
	 * @return bool 
	 */
	public function setstrokeantialias ($stroke_antialias) {}

	/**
	 * Specifies a text alignment
	 * @link http://www.php.net/manual/en/imagickdraw.settextalignment.php
	 * @param alignment int <p>
	 * ALIGN_ constant
	 * </p>
	 * @return bool 
	 */
	public function settextalignment ($alignment) {}

	/**
	 * Specifies a decoration
	 * @link http://www.php.net/manual/en/imagickdraw.settextdecoration.php
	 * @param decoration int <p>
	 * DECORATION_ constant
	 * </p>
	 * @return bool 
	 */
	public function settextdecoration ($decoration) {}

	/**
	 * Specifies the color of a background rectangle
	 * @link http://www.php.net/manual/en/imagickdraw.settextundercolor.php
	 * @param under_color ImagickPixel <p>
	 * the under color
	 * </p>
	 * @return bool 
	 */
	public function settextundercolor (ImagickPixel $under_color) {}

	/**
	 * Sets the overall canvas size
	 * @link http://www.php.net/manual/en/imagickdraw.setviewbox.php
	 * @param x1 int <p>
	 * left x coordinate
	 * </p>
	 * @param y1 int <p>
	 * left y coordinate
	 * </p>
	 * @param x2 int <p>
	 * right x coordinate
	 * </p>
	 * @param y2 int <p>
	 * right y coordinate
	 * </p>
	 * @return bool 
	 */
	public function setviewbox ($x1, $y1, $x2, $y2) {}

	/**
	 * Makes an exact copy of the specified ImagickDraw object
	 * @link http://www.php.net/manual/en/imagickdraw.clone.php
	 * @return ImagickDraw What the function returns, first on success, then on failure. See
	 * also the &amp;return.success; entity
	 */
	public function clone () {}

	/**
	 * Adjusts the current affine transformation matrix
	 * @link http://www.php.net/manual/en/imagickdraw.affine.php
	 * @param affine array <p>
	 * Affine matrix parameters
	 * </p>
	 * @return bool 
	 */
	public function affine (array $affine) {}

	/**
	 * Draws a bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.bezier.php
	 * @param coordinates array <p>
	 * Multidimensional array like array( array( 'x' => 1, 'y' => 2 ), 
	 * array( 'x' => 3, 'y' => 4 ) )
	 * </p>
	 * @return bool 
	 */
	public function bezier (array $coordinates) {}

	/**
	 * Composites an image onto the current image
	 * @link http://www.php.net/manual/en/imagickdraw.composite.php
	 * @param compose int <p>
	 * composition operator. One of COMPOSITE_ constants
	 * </p>
	 * @param x float <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param y float <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param width float <p>
	 * width of the composition image
	 * </p>
	 * @param height float <p>
	 * height of the composition image
	 * </p>
	 * @param compositeWand Imagick <p>
	 * the Imagick object where composition image is taken from
	 * </p>
	 * @return bool true on success.
	 */
	public function composite ($compose, $x, $y, $width, $height, Imagick $compositeWand) {}

	/**
	 * Draws color on image
	 * @link http://www.php.net/manual/en/imagickdraw.color.php
	 * @param x float <p>
	 * x coordinate of the paint
	 * </p>
	 * @param y float <p>
	 * y coordinate of the paint
	 * </p>
	 * @param paintMethod int <p>
	 * one of the PAINT_ constants
	 * </p>
	 * @return bool 
	 */
	public function color ($x, $y, $paintMethod) {}

	/**
	 * Adds a comment
	 * @link http://www.php.net/manual/en/imagickdraw.comment.php
	 * @param comment string <p>
	 * The comment string to add to vector output stream
	 * </p>
	 * @return bool 
	 */
	public function comment ($comment) {}

	/**
	 * Obtains the current clipping path ID
	 * @link http://www.php.net/manual/en/imagickdraw.getclippath.php
	 * @return string a string containing the clip path ID or false if no clip path exists.
	 */
	public function getclippath () {}

	/**
	 * Returns the current polygon fill rule
	 * @link http://www.php.net/manual/en/imagickdraw.getcliprule.php
	 * @return int one of the FILLRULE_ constants.
	 */
	public function getcliprule () {}

	/**
	 * Returns the interpretation of clip path units
	 * @link http://www.php.net/manual/en/imagickdraw.getclipunits.php
	 * @return int an int on success.
	 */
	public function getclipunits () {}

	/**
	 * Returns the fill color
	 * @link http://www.php.net/manual/en/imagickdraw.getfillcolor.php
	 * @return ImagickPixel an ImagickPixel object.
	 */
	public function getfillcolor () {}

	/**
	 * Returns the opacity used when drawing
	 * @link http://www.php.net/manual/en/imagickdraw.getfillopacity.php
	 * @return float The opacity.
	 */
	public function getfillopacity () {}

	/**
	 * Returns the fill rule
	 * @link http://www.php.net/manual/en/imagickdraw.getfillrule.php
	 * @return int a FILLRULE_ constant
	 */
	public function getfillrule () {}

	/**
	 * Returns the text placement gravity
	 * @link http://www.php.net/manual/en/imagickdraw.getgravity.php
	 * @return int a GRAVITY_ constant on success and 0 if no gravity is set.
	 */
	public function getgravity () {}

	/**
	 * Returns the current stroke antialias setting
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokeantialias.php
	 * @return bool true if antialiasing is on and false if it is off.
	 */
	public function getstrokeantialias () {}

	/**
	 * Returns the color used for stroking object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokecolor.php
	 * @return ImagickPixel an ImagickPixel object which describes the color.
	 */
	public function getstrokecolor () {}

	/**
	 * Returns an array representing the pattern of dashes and gaps used to stroke paths
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokedasharray.php
	 * @return array an array on success and empty array if not set.
	 */
	public function getstrokedasharray () {}

	/**
	 * Returns the offset into the dash pattern to start the dash
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokedashoffset.php
	 * @return float a float representing the offset and 0 if it's not set.
	 */
	public function getstrokedashoffset () {}

	/**
	 * Returns the shape to be used at the end of open subpaths when they are stroked
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokelinecap.php
	 * @return int one of the LINECAP_ constants or 0 if stroke linecap is not set.
	 */
	public function getstrokelinecap () {}

	/**
	 * Returns the shape to be used at the corners of paths when they are stroked
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokelinejoin.php
	 * @return int one of the LINEJOIN_ constants or 0 if stroke line join is not set.
	 */
	public function getstrokelinejoin () {}

	/**
	 * Returns the stroke miter limit
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokemiterlimit.php
	 * @return int an int describing the miter limit
	 * and 0 if no miter limit is set.
	 */
	public function getstrokemiterlimit () {}

	/**
	 * Returns the opacity of stroked object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokeopacity.php
	 * @return float a double describing the opacity.
	 */
	public function getstrokeopacity () {}

	/**
	 * Returns the width of the stroke used to draw object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.getstrokewidth.php
	 * @return float a double describing the stroke width.
	 */
	public function getstrokewidth () {}

	/**
	 * Returns the text alignment
	 * @link http://www.php.net/manual/en/imagickdraw.gettextalignment.php
	 * @return int one of the ALIGN_ constants and 0 if no align is set.
	 */
	public function gettextalignment () {}

	/**
	 * Returns the current text antialias setting
	 * @link http://www.php.net/manual/en/imagickdraw.gettextantialias.php
	 * @return bool true if text is antialiased and false if not.
	 */
	public function gettextantialias () {}

	/**
	 * Returns a string containing vector graphics
	 * @link http://www.php.net/manual/en/imagickdraw.getvectorgraphics.php
	 * @return string a string containing the vector graphics.
	 */
	public function getvectorgraphics () {}

	/**
	 * Returns the text under color
	 * @link http://www.php.net/manual/en/imagickdraw.gettextundercolor.php
	 * @return ImagickPixel an ImagickPixel object describing the color.
	 */
	public function gettextundercolor () {}

	/**
	 * Adds a path element to the current path
	 * @link http://www.php.net/manual/en/imagickdraw.pathclose.php
	 * @return bool 
	 */
	public function pathclose () {}

	/**
	 * Draws a cubic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoabsolute.php
	 * @param x1 float <p>
	 * x coordinate of the first control point
	 * </p>
	 * @param y1 float <p>
	 * y coordinate of the first control point
	 * </p>
	 * @param x2 float <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param y2 float <p>
	 * y coordinate of the first control point
	 * </p>
	 * @param x float <p>
	 * x coordinate of the curve end
	 * </p>
	 * @param y float <p>
	 * y coordinate of the curve end
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetoabsolute ($x1, $y1, $x2, $y2, $x, $y) {}

	/**
	 * Draws a cubic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetorelative.php
	 * @param x1 float <p>
	 * x coordinate of starting control point
	 * </p>
	 * @param y1 float <p>
	 * y coordinate of starting control point
	 * </p>
	 * @param x2 float <p>
	 * x coordinate of ending control point
	 * </p>
	 * @param y2 float <p>
	 * y coordinate of ending control point
	 * </p>
	 * @param x float <p>
	 * ending x coordinate
	 * </p>
	 * @param y float <p>
	 * ending y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetorelative ($x1, $y1, $x2, $y2, $x, $y) {}

	/**
	 * Draws a quadratic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierabsolute.php
	 * @param x1 float <p>
	 * x coordinate of the control point
	 * </p>
	 * @param y1 float <p>
	 * y coordinate of the control point
	 * </p>
	 * @param x float <p>
	 * x coordinate of the end point
	 * </p>
	 * @param y float <p>
	 * y coordinate of the end point
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetoquadraticbezierabsolute ($x1, $y1, $x, $y) {}

	/**
	 * Draws a quadratic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierrelative.php
	 * @param x1 float <p>
	 * starting x coordinate
	 * </p>
	 * @param y1 float <p>
	 * starting y coordinate
	 * </p>
	 * @param x float <p>
	 * ending x coordinate
	 * </p>
	 * @param y float <p>
	 * ending y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetoquadraticbezierrelative ($x1, $y1, $x, $y) {}

	/**
	 * Draws a quadratic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
	 * @param x float <p>
	 * ending x coordinate
	 * </p>
	 * @param y float <p>
	 * ending y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetoquadraticbeziersmoothabsolute ($x, $y) {}

	/**
	 * Draws a quadratic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
	 * @param x float <p>
	 * ending x coordinate
	 * </p>
	 * @param y float <p>
	 * ending y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetoquadraticbeziersmoothrelative ($x, $y) {}

	/**
	 * Draws a cubic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetosmoothabsolute.php
	 * @param x2 float <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param y2 float <p>
	 * y coordinate of the second control point
	 * </p>
	 * @param x float <p>
	 * x coordinate of the ending point
	 * </p>
	 * @param y float <p>
	 * y coordinate of the ending point
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetosmoothabsolute ($x2, $y2, $x, $y) {}

	/**
	 * Draws a cubic Bezier curve
	 * @link http://www.php.net/manual/en/imagickdraw.pathcurvetosmoothrelative.php
	 * @param x2 float <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param y2 float <p>
	 * y coordinate of the second control point
	 * </p>
	 * @param x float <p>
	 * x coordinate of the ending point
	 * </p>
	 * @param y float <p>
	 * y coordinate of the ending point
	 * </p>
	 * @return bool 
	 */
	public function pathcurvetosmoothrelative ($x2, $y2, $x, $y) {}

	/**
	 * Draws an elliptical arc
	 * @link http://www.php.net/manual/en/imagickdraw.pathellipticarcabsolute.php
	 * @param rx float <p>
	 * x radius
	 * </p>
	 * @param ry float <p>
	 * y radius
	 * </p>
	 * @param x_axis_rotation float <p>
	 * x axis rotation
	 * </p>
	 * @param large_arc_flag bool <p>
	 * large arc flag
	 * </p>
	 * @param sweep_flag bool <p>
	 * sweep flag
	 * </p>
	 * @param x float <p>
	 * x coordinate
	 * </p>
	 * @param y float <p>
	 * y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathellipticarcabsolute ($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}

	/**
	 * Draws an elliptical arc
	 * @link http://www.php.net/manual/en/imagickdraw.pathellipticarcrelative.php
	 * @param rx float <p>
	 * x radius
	 * </p>
	 * @param ry float <p>
	 * y radius
	 * </p>
	 * @param x_axis_rotation float <p>
	 * x axis rotation
	 * </p>
	 * @param large_arc_flag bool <p>
	 * large arc flag
	 * </p>
	 * @param sweep_flag bool <p>
	 * sweep flag
	 * </p>
	 * @param x float <p>
	 * x coordinate
	 * </p>
	 * @param y float <p>
	 * y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathellipticarcrelative ($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}

	/**
	 * Terminates the current path
	 * @link http://www.php.net/manual/en/imagickdraw.pathfinish.php
	 * @return bool 
	 */
	public function pathfinish () {}

	/**
	 * Draws a line path
	 * @link http://www.php.net/manual/en/imagickdraw.pathlinetoabsolute.php
	 * @param x float <p>
	 * starting x coordinate
	 * </p>
	 * @param y float <p>
	 * ending x coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathlinetoabsolute ($x, $y) {}

	/**
	 * Draws a line path
	 * @link http://www.php.net/manual/en/imagickdraw.pathlinetorelative.php
	 * @param x float <p>
	 * starting x coordinate
	 * </p>
	 * @param y float <p>
	 * starting y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathlinetorelative ($x, $y) {}

	/**
	 * Draws a horizontal line path
	 * @link http://www.php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php
	 * @param x float <p>
	 * x coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathlinetohorizontalabsolute ($x) {}

	/**
	 * Draws a horizontal line
	 * @link http://www.php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php
	 * @param x float <p>
	 * x coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathlinetohorizontalrelative ($x) {}

	/**
	 * Draws a vertical line
	 * @link http://www.php.net/manual/en/imagickdraw.pathlinetoverticalabsolute.php
	 * @param y float <p>
	 * y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathlinetoverticalabsolute ($y) {}

	/**
	 * Draws a vertical line path
	 * @link http://www.php.net/manual/en/imagickdraw.pathlinetoverticalrelative.php
	 * @param y float <p>
	 * y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathlinetoverticalrelative ($y) {}

	/**
	 * Starts a new sub-path
	 * @link http://www.php.net/manual/en/imagickdraw.pathmovetoabsolute.php
	 * @param x float <p>
	 * x coordinate of the starting point
	 * </p>
	 * @param y float <p>
	 * y coordinate of the starting point
	 * </p>
	 * @return bool 
	 */
	public function pathmovetoabsolute ($x, $y) {}

	/**
	 * Starts a new sub-path
	 * @link http://www.php.net/manual/en/imagickdraw.pathmovetorelative.php
	 * @param x float <p>
	 * target x coordinate
	 * </p>
	 * @param y float <p>
	 * target y coordinate
	 * </p>
	 * @return bool 
	 */
	public function pathmovetorelative ($x, $y) {}

	/**
	 * Declares the start of a path drawing list
	 * @link http://www.php.net/manual/en/imagickdraw.pathstart.php
	 * @return bool 
	 */
	public function pathstart () {}

	/**
	 * Draws a polyline
	 * @link http://www.php.net/manual/en/imagickdraw.polyline.php
	 * @param coordinates array <p>
	 * array of x and y coordinates: array( array( 'x' => 4, 'y' => 6 ), array( 'x' => 8, 'y' => 10 ) ) 
	 * </p>
	 * @return bool true on success.
	 */
	public function polyline (array $coordinates) {}

	/**
	 * Terminates a clip path definition
	 * @link http://www.php.net/manual/en/imagickdraw.popclippath.php
	 * @return bool 
	 */
	public function popclippath () {}

	/**
	 * Terminates a definition list
	 * @link http://www.php.net/manual/en/imagickdraw.popdefs.php
	 * @return bool 
	 */
	public function popdefs () {}

	/**
	 * Terminates a pattern definition
	 * @link http://www.php.net/manual/en/imagickdraw.poppattern.php
	 * @return bool true on success or false on failure
	 */
	public function poppattern () {}

	/**
	 * Starts a clip path definition
	 * @link http://www.php.net/manual/en/imagickdraw.pushclippath.php
	 * @param clip_mask_id string <p>
	 * Clip mask Id
	 * </p>
	 * @return bool 
	 */
	public function pushclippath ($clip_mask_id) {}

	/**
	 * Indicates that following commands create named elements for early processing
	 * @link http://www.php.net/manual/en/imagickdraw.pushdefs.php
	 * @return bool 
	 */
	public function pushdefs () {}

	/**
	 * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
	 * @link http://www.php.net/manual/en/imagickdraw.pushpattern.php
	 * @param pattern_id string <p>
	 * the pattern Id
	 * </p>
	 * @param x float <p>
	 * x coordinate of the top-left corner
	 * </p>
	 * @param y float <p>
	 * y coordinate of the top-left corner
	 * </p>
	 * @param width float <p>
	 * width of the pattern
	 * </p>
	 * @param height float <p>
	 * height of the pattern
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function pushpattern ($pattern_id, $x, $y, $width, $height) {}

	/**
	 * Renders all preceding drawing commands onto the image
	 * @link http://www.php.net/manual/en/imagickdraw.render.php
	 * @return bool true on success or false on failure
	 */
	public function render () {}

	/**
	 * Applies the specified rotation to the current coordinate space
	 * @link http://www.php.net/manual/en/imagickdraw.rotate.php
	 * @param degrees float <p>
	 * degrees to rotate
	 * </p>
	 * @return bool 
	 */
	public function rotate ($degrees) {}

	/**
	 * Adjusts the scaling factor
	 * @link http://www.php.net/manual/en/imagickdraw.scale.php
	 * @param x float <p>
	 * horizontal factor
	 * </p>
	 * @param y float <p>
	 * vertical factor
	 * </p>
	 * @return bool 
	 */
	public function scale ($x, $y) {}

	/**
	 * Associates a named clipping path with the image
	 * @link http://www.php.net/manual/en/imagickdraw.setclippath.php
	 * @param clip_mask string <p>
	 * the clipping path name
	 * </p>
	 * @return bool 
	 */
	public function setclippath ($clip_mask) {}

	/**
	 * Set the polygon fill rule to be used by the clipping path
	 * @link http://www.php.net/manual/en/imagickdraw.setcliprule.php
	 * @param fill_rule int <p>
	 * FILLRULE_ constant
	 * </p>
	 * @return bool 
	 */
	public function setcliprule ($fill_rule) {}

	/**
	 * Sets the interpretation of clip path units
	 * @link http://www.php.net/manual/en/imagickdraw.setclipunits.php
	 * @param clip_units int <p>
	 * the number of clip units
	 * </p>
	 * @return bool 
	 */
	public function setclipunits ($clip_units) {}

	/**
	 * Sets the opacity to use when drawing using the fill color or fill texture
	 * @link http://www.php.net/manual/en/imagickdraw.setfillopacity.php
	 * @param fillOpacity float <p>
	 * the fill opacity
	 * </p>
	 * @return bool 
	 */
	public function setfillopacity ($fillOpacity) {}

	/**
	 * Sets the URL to use as a fill pattern for filling objects
	 * @link http://www.php.net/manual/en/imagickdraw.setfillpatternurl.php
	 * @param fill_url string <p>
	 * URL to use to obtain fill pattern.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setfillpatternurl ($fill_url) {}

	/**
	 * Sets the fill rule to use while drawing polygons
	 * @link http://www.php.net/manual/en/imagickdraw.setfillrule.php
	 * @param fill_rule int <p>
	 * FILLRULE_ constant
	 * </p>
	 * @return bool 
	 */
	public function setfillrule ($fill_rule) {}

	/**
	 * Sets the text placement gravity
	 * @link http://www.php.net/manual/en/imagickdraw.setgravity.php
	 * @param gravity int <p>
	 * GRAVITY_ constant
	 * </p>
	 * @return bool 
	 */
	public function setgravity ($gravity) {}

	/**
	 * Sets the pattern used for stroking object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokepatternurl.php
	 * @param stroke_url string <p>
	 * stroke URL
	 * </p>
	 * @return bool imagick.imagickdraw.return.success;
	 */
	public function setstrokepatternurl ($stroke_url) {}

	/**
	 * Specifies the offset into the dash pattern to start the dash
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokedashoffset.php
	 * @param dash_offset float <p>
	 * dash offset
	 * </p>
	 * @return bool 
	 */
	public function setstrokedashoffset ($dash_offset) {}

	/**
	 * Specifies the shape to be used at the end of open subpaths when they are stroked
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokelinecap.php
	 * @param linecap int <p>
	 * LINECAP_ constant
	 * </p>
	 * @return bool 
	 */
	public function setstrokelinecap ($linecap) {}

	/**
	 * Specifies the shape to be used at the corners of paths when they are stroked
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokelinejoin.php
	 * @param linejoin int <p>
	 * LINEJOIN_ constant
	 * </p>
	 * @return bool 
	 */
	public function setstrokelinejoin ($linejoin) {}

	/**
	 * Specifies the miter limit
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokemiterlimit.php
	 * @param miterlimit int <p>
	 * the miter limit
	 * </p>
	 * @return bool 
	 */
	public function setstrokemiterlimit ($miterlimit) {}

	/**
	 * Specifies the opacity of stroked object outlines
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokeopacity.php
	 * @param stroke_opacity float <p>
	 * stroke opacity. 1.0 is fully opaque
	 * </p>
	 * @return bool 
	 */
	public function setstrokeopacity ($stroke_opacity) {}

	/**
	 * Sets the vector graphics
	 * @link http://www.php.net/manual/en/imagickdraw.setvectorgraphics.php
	 * @param xml string <p>
	 * xml containing the vector graphics
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function setvectorgraphics ($xml) {}

	/**
	 * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
	 * @link http://www.php.net/manual/en/imagickdraw.pop.php
	 * @return bool true on success and false on failure.
	 */
	public function pop () {}

	/**
	 * Clones the current ImagickDraw and pushes it to the stack
	 * @link http://www.php.net/manual/en/imagickdraw.push.php
	 * @return bool true on success or false on failure
	 */
	public function push () {}

	/**
	 * Specifies the pattern of dashes and gaps used to stroke paths
	 * @link http://www.php.net/manual/en/imagickdraw.setstrokedasharray.php
	 * @param dashArray array <p>
	 * array of floats
	 * </p>
	 * @return bool true on success.
	 */
	public function setstrokedasharray (array $dashArray) {}

}

class ImagickPixelIterator implements Iterator, Traversable {

	/**
	 * The ImagickPixelIterator constructor
	 * @link http://www.php.net/manual/en/imagickpixeliterator.construct.php
	 * @param Imagick Imagick
	 */
	public function __construct (Imagick $Imagick) {}

	/**
	 * Returns a new pixel iterator
	 * @link http://www.php.net/manual/en/imagickpixeliterator.newpixeliterator.php
	 * @param wand Imagick 
	 * @return bool true on success. Throwing ImagickPixelIteratorException.
	 */
	public function newpixeliterator (Imagick $wand) {}

	/**
	 * Returns a new pixel iterator
	 * @link http://www.php.net/manual/en/imagickpixeliterator.newpixelregioniterator.php
	 * @param wand Imagick <p>
	 * </p>
	 * @param x int <p>
	 * </p>
	 * @param y int <p>
	 * </p>
	 * @param columns int <p>
	 * </p>
	 * @param rows int <p>
	 * </p>
	 * @return bool a new ImagickPixelIterator on success; on failure, throws
	 * ImagickPixelIteratorException.
	 */
	public function newpixelregioniterator (Imagick $wand, $x, $y, $columns, $rows) {}

	/**
	 * Returns the current pixel iterator row
	 * @link http://www.php.net/manual/en/imagickpixeliterator.getiteratorrow.php
	 * @return int the integer offset of the row, throwing
	 * ImagickPixelIteratorException on error.
	 */
	public function getiteratorrow () {}

	/**
	 * Set the pixel iterator row
	 * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorrow.php
	 * @param row int <p>
	 * </p>
	 * @return bool true on success.
	 */
	public function setiteratorrow ($row) {}

	/**
	 * Sets the pixel iterator to the first pixel row
	 * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorfirstrow.php
	 * @return bool true on success.
	 */
	public function setiteratorfirstrow () {}

	/**
	 * Sets the pixel iterator to the last pixel row
	 * @link http://www.php.net/manual/en/imagickpixeliterator.setiteratorlastrow.php
	 * @return bool true on success.
	 */
	public function setiteratorlastrow () {}

	/**
	 * Returns the previous row
	 * @link http://www.php.net/manual/en/imagickpixeliterator.getpreviousiteratorrow.php
	 * @return array the previous row as an array of ImagickPixelWand objects from the
	 * ImagickPixelIterator, throwing ImagickPixelIteratorException on error.
	 */
	public function getpreviousiteratorrow () {}

	/**
	 * Returns the current row of ImagickPixel objects
	 * @link http://www.php.net/manual/en/imagickpixeliterator.getcurrentiteratorrow.php
	 * @return array a row as an array of ImagickPixel objects that can themselves be iterated.
	 */
	public function getcurrentiteratorrow () {}

	/**
	 * Returns the next row of the pixel iterator
	 * @link http://www.php.net/manual/en/imagickpixeliterator.getnextiteratorrow.php
	 * @return array the next row as an array of ImagickPixel objects, throwing
	 * ImagickPixelIteratorException on error.
	 */
	public function getnextiteratorrow () {}

	/**
	 * Resets the pixel iterator
	 * @link http://www.php.net/manual/en/imagickpixeliterator.resetiterator.php
	 * @return bool true on success.
	 */
	public function resetiterator () {}

	/**
	 * Syncs the pixel iterator
	 * @link http://www.php.net/manual/en/imagickpixeliterator.synciterator.php
	 * @return bool true on success.
	 */
	public function synciterator () {}

	/**
	 * Deallocates resources associated with a PixelIterator
	 * @link http://www.php.net/manual/en/imagickpixeliterator.destroy.php
	 * @return bool true on success.
	 */
	public function destroy () {}

	/**
	 * Clear resources associated with a PixelIterator
	 * @link http://www.php.net/manual/en/imagickpixeliterator.clear.php
	 * @return bool true on success.
	 */
	public function clear () {}

	public function key () {}

	public function next () {}

	public function rewind () {}

	public function current () {}

	public function valid () {}

}

class ImagickPixel  {

	/**
	 * Returns the normalized HSL color of the ImagickPixel object
	 * @link http://www.php.net/manual/en/imagickpixel.gethsl.php
	 * @return array the HSL value in an array with the keys "hue",
	 * "saturation", and "luminosity". Throws ImagickPixelException on failure.
	 */
	public function gethsl () {}

	/**
	 * Sets the normalized HSL color
	 * @link http://www.php.net/manual/en/imagickpixel.sethsl.php
	 * @param hue float <p>
	 * The normalized value for hue, described as a fractional arc
	 * (between 0 and 1) of the hue circle, where the zero value is
	 * red.
	 * </p>
	 * @param saturation float <p>
	 * The normalized value for saturation, with 1 as full saturation.
	 * </p>
	 * @param luminosity float <p>
	 * The normalized value for luminosity, on a scale from black at
	 * 0 to white at 1, with the full HS value at 0.5 luminosity.
	 * </p>
	 * @return bool true on success.
	 */
	public function sethsl ($hue, $saturation, $luminosity) {}

	public function getcolorvaluequantum () {}

	/**
	 * @param color_value
	 */
	public function setcolorvaluequantum ($color_value) {}

	public function getindex () {}

	/**
	 * @param index
	 */
	public function setindex ($index) {}

	/**
	 * The ImagickPixel constructor
	 * @link http://www.php.net/manual/en/imagickpixel.construct.php
	 * @param color[optional]
	 */
	public function __construct ($color = null) {}

	/**
	 * Sets the color
	 * @link http://www.php.net/manual/en/imagickpixel.setcolor.php
	 * @param color string <p>
	 * The color definition to use in order to initialise the
	 * ImagickPixel object.
	 * </p>
	 * @return bool true if the specified color was set, false otherwise.
	 */
	public function setcolor ($color) {}

	/**
	 * Sets the normalized value of one of the channels
	 * @link http://www.php.net/manual/en/imagickpixel.setcolorvalue.php
	 * @param color int <p>
	 * One of the Imagick color constants e.g. \Imagick::COLOR_GREEN or \Imagick::COLOR_ALPHA.
	 * </p>
	 * @param value float <p>
	 * The value to set this channel to, ranging from 0 to 1.
	 * </p>
	 * @return bool true on success.
	 */
	public function setcolorvalue ($color, $value) {}

	/**
	 * Gets the normalized value of the provided color channel
	 * @link http://www.php.net/manual/en/imagickpixel.getcolorvalue.php
	 * @param color int <p>
	 * The color to get the value of, specified as one of the Imagick color
	 * constants. This can be one of the RGB colors, CMYK colors, alpha and
	 * opacity e.g (Imagick::COLOR_BLUE, Imagick::COLOR_MAGENTA).
	 * </p>
	 * @return float The value of the channel, as a normalized floating-point number, throwing
	 * ImagickPixelException on error.
	 */
	public function getcolorvalue ($color) {}

	/**
	 * Clears resources associated with this object
	 * @link http://www.php.net/manual/en/imagickpixel.clear.php
	 * @return bool true on success.
	 */
	public function clear () {}

	/**
	 * Deallocates resources associated with this object
	 * @link http://www.php.net/manual/en/imagickpixel.destroy.php
	 * @return bool true on success.
	 */
	public function destroy () {}

	/**
	 * Check the distance between this color and another
	 * @link http://www.php.net/manual/en/imagickpixel.issimilar.php
	 * @param color ImagickPixel <p>
	 * The ImagickPixel object to compare this object against.
	 * </p>
	 * @param fuzz float <p>
	 * The maximum distance within which to consider these colors as similar.
	 * The theoretical maximum for this value is the square root of three
	 * (1.732).
	 * </p>
	 * @return bool true on success.
	 */
	public function issimilar (ImagickPixel $color, $fuzz) {}

	/**
	 * Returns the color
	 * @link http://www.php.net/manual/en/imagickpixel.getcolor.php
	 * @param normalized bool[optional] <p>
	 * Normalize the color values
	 * </p>
	 * @return array An array of channel values, each normalized if true is given as param. Throws
	 * ImagickPixelException on error.
	 */
	public function getcolor ($normalized = null) {}

	/**
	 * Returns the color as a string
	 * @link http://www.php.net/manual/en/imagickpixel.getcolorasstring.php
	 * @return string the color of the ImagickPixel object as a string.
	 */
	public function getcolorasstring () {}

	/**
	 * Returns the color count associated with this color
	 * @link http://www.php.net/manual/en/imagickpixel.getcolorcount.php
	 * @return int the color count as an integer on success, throws
	 * ImagickPixelException on failure.
	 */
	public function getcolorcount () {}

	/**
	 * @param colorCount
	 */
	public function setcolorcount ($colorCount) {}

	public function clone () {}

}
// End of imagick v.3.1.2
