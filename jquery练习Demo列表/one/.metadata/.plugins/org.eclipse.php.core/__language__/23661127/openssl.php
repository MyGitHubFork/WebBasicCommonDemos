<?php

// Start of openssl v.7.0.0-dev

/**
 * Retrieve the available certificate locations
 * @link http://www.php.net/manual/en/function.openssl-get-cert-locations.php
 * @return array an array with the available certificate locations.
 */
function openssl_get_cert_locations () {}

/**
 * Generate a new signed public key and challenge
 * @link http://www.php.net/manual/en/function.openssl-spki-new.php
 * @param $privkey
 * @param $challenge
 * @param $algo [optional]
 */
function openssl_spki_new ($privkey, $challenge, $algo = null) {}

/**
 * Verifies a signed public key and challenge
 * @link http://www.php.net/manual/en/function.openssl-spki-verify.php
 * @param $spki
 */
function openssl_spki_verify ($spki) {}

/**
 * Exports a valid PEM formatted public key signed public key and challenge
 * @link http://www.php.net/manual/en/function.openssl-spki-export.php
 * @param $spki
 */
function openssl_spki_export ($spki) {}

/**
 * Exports the challenge assoicated with a signed public key and challenge
 * @link http://www.php.net/manual/en/function.openssl-spki-export-challenge.php
 * @param $spki
 */
function openssl_spki_export_challenge ($spki) {}

/**
 * Frees a private key
 * @link http://www.php.net/manual/en/function.openssl-pkey-free.php
 * @param resource $key <p>
 * Resource holding the key.
 * </p>
 * @return void 
 */
function openssl_pkey_free ($key) {}

/**
 * Generates a new private key
 * @link http://www.php.net/manual/en/function.openssl-pkey-new.php
 * @param array $configargs [optional] <p>
 * You can finetune the key generation (such as specifying the number of
 * bits) using configargs. See
 * openssl_csr_new for more information about
 * configargs.
 * </p>
 * @return resource a resource identifier for the pkey on success, or false on
 * error.
 */
function openssl_pkey_new (array $configargs = null) {}

/**
 * Gets an exportable representation of a key into a string
 * @link http://www.php.net/manual/en/function.openssl-pkey-export.php
 * @param mixed $key <p>
 * </p>
 * @param string $out <p>
 * </p>
 * @param string $passphrase [optional] <p>
 * The key is optionally protected by passphrase.
 * </p>
 * @param array $configargs [optional] <p>
 * configargs can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file. See openssl_csr_new for more
 * information about configargs.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkey_export ($key, &$out, $passphrase = null, array $configargs = null) {}

/**
 * Gets an exportable representation of a key into a file
 * @link http://www.php.net/manual/en/function.openssl-pkey-export-to-file.php
 * @param mixed $key <p>
 * </p>
 * @param string $outfilename <p>
 * Path to the output file.
 * </p>
 * @param string $passphrase [optional] <p>
 * The key can be optionally protected by a
 * passphrase.
 * </p>
 * @param array $configargs [optional] <p>
 * configargs can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file. See openssl_csr_new for more
 * information about configargs.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkey_export_to_file ($key, $outfilename, $passphrase = null, array $configargs = null) {}

/**
 * Get a private key
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-private.php
 * @param mixed $key <p>
 * key can be one of the following:
 * a string having the format
 * file://path/to/file.pem. The named file must
 * contain a PEM encoded certificate/private key (it may contain both).
 * @param string $passphrase [optional] <p>
 * The optional parameter passphrase must be used
 * if the specified key is encrypted (protected by a passphrase).
 * </p>
 * @return resource a positive key resource identifier on success, or false on error.
 */
function openssl_pkey_get_private ($key, $passphrase = null) {}

/**
 * Extract public key from certificate and prepare it for use
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-public.php
 * @param mixed $certificate <p>
 * certificate can be one of the following:
 * an X.509 certificate resource
 * @return resource a positive key resource identifier on success, or false on error.
 */
function openssl_pkey_get_public ($certificate) {}

/**
 * Returns an array with the key details
 * @link http://www.php.net/manual/en/function.openssl-pkey-get-details.php
 * @param resource $key <p>
 * Resource holding the key.
 * </p>
 * @return array an array with the key details in success or false in failure.
 * Returned array has indexes bits (number of bits),
 * key (string representation of the public key) and
 * type (type of the key which is one of
 * OPENSSL_KEYTYPE_RSA,
 * OPENSSL_KEYTYPE_DSA,
 * OPENSSL_KEYTYPE_DH,
 * OPENSSL_KEYTYPE_EC or -1 meaning unknown).
 * </p>
 * <p>
 * Depending on the key type used, additional details may be returned. Note that 
 * some elements may not always be available.
 */
function openssl_pkey_get_details ($key) {}

/**
 * Free key resource
 * @link http://www.php.net/manual/en/function.openssl-free-key.php
 * @param resource $key_identifier <p>
 * </p>
 * @return void 
 */
function openssl_free_key ($key_identifier) {}

/**
 * &Alias; <function>openssl_pkey_get_private</function>
 * @link http://www.php.net/manual/en/function.openssl-get-privatekey.php
 * @param $key
 * @param $passphrase [optional]
 */
function openssl_get_privatekey ($key, $passphrase = null) {}

/**
 * &Alias; <function>openssl_pkey_get_public</function>
 * @link http://www.php.net/manual/en/function.openssl-get-publickey.php
 * @param $cert
 */
function openssl_get_publickey ($cert) {}

/**
 * Parse an X.509 certificate and return a resource identifier for
  it
 * @link http://www.php.net/manual/en/function.openssl-x509-read.php
 * @param mixed $x509certdata <p>
 * </p>
 * @return resource a resource identifier on success or false on failure.
 */
function openssl_x509_read ($x509certdata) {}

/**
 * Free certificate resource
 * @link http://www.php.net/manual/en/function.openssl-x509-free.php
 * @param resource $x509cert <p>
 * </p>
 * @return void 
 */
function openssl_x509_free ($x509cert) {}

/**
 * Parse an X509 certificate and return the information as an array
 * @link http://www.php.net/manual/en/function.openssl-x509-parse.php
 * @param mixed $x509cert <p>
 * </p>
 * @param bool $shortnames [optional] <p>
 * shortnames controls how the data is indexed in the
 * array - if shortnames is true (the default) then
 * fields will be indexed with the short name form, otherwise, the long name
 * form will be used - e.g.: CN is the shortname form of commonName.
 * </p>
 * @return array The structure of the returned data is (deliberately) not
 * yet documented, as it is still subject to change.
 */
function openssl_x509_parse ($x509cert, $shortnames = null) {}

/**
 * Verifies if a certificate can be used for a particular purpose
 * @link http://www.php.net/manual/en/function.openssl-x509-checkpurpose.php
 * @param mixed $x509cert <p>
 * The examined certificate.
 * </p>
 * @param int $purpose <p>
 * <table>
 * openssl_x509_checkpurpose purposes
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SSL_CLIENT</td>
 * <td>Can the certificate be used for the client side of an SSL
 * connection?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SSL_SERVER</td>
 * <td>Can the certificate be used for the server side of an SSL
 * connection?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_NS_SSL_SERVER</td>
 * <td>Can the cert be used for Netscape SSL server?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SMIME_SIGN</td>
 * <td>Can the cert be used to sign S/MIME email?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SMIME_ENCRYPT</td>
 * <td>Can the cert be used to encrypt S/MIME email?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_CRL_SIGN</td>
 * <td>Can the cert be used to sign a certificate revocation list
 * (CRL)?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_ANY</td>
 * <td>Can the cert be used for Any/All purposes?</td>
 * </tr>
 * </table>
 * These options are not bitfields - you may specify one only!
 * </p>
 * @param array $cainfo [optional] <p>
 * cainfo should be an array of trusted CA files/dirs
 * as described in Certificate
 * Verification.
 * </p>
 * @param string $untrustedfile [optional] <p>
 * If specified, this should be the name of a PEM encoded file holding
 * certificates that can be used to help verify the certificate, although
 * no trust is placed in the certificates that come from that file.
 * </p>
 * @return int true if the certificate can be used for the intended purpose,
 * false if it cannot, or -1 on error.
 */
function openssl_x509_checkpurpose ($x509cert, $purpose, array $cainfo = null, $untrustedfile = null) {}

/**
 * Checks if a private key corresponds to a certificate
 * @link http://www.php.net/manual/en/function.openssl-x509-check-private-key.php
 * @param mixed $cert <p>
 * The certificate.
 * </p>
 * @param mixed $key <p>
 * The private key.
 * </p>
 * @return bool true if key is the private key that
 * corresponds to cert, or false otherwise.
 */
function openssl_x509_check_private_key ($cert, $key) {}

/**
 * Exports a certificate as a string
 * @link http://www.php.net/manual/en/function.openssl-x509-export.php
 * @param mixed $x509 
 * @param string $output <p>
 * On success, this will hold the PEM.
 * </p>
 * @param bool $notext [optional] &note.openssl.param-notext;
 * @return bool true on success or false on failure
 */
function openssl_x509_export ($x509, &$output, $notext = null) {}

/**
 * Calculates the fingerprint, or digest, of a given X.509 certificate
 * @link http://www.php.net/manual/en/function.openssl-x509-fingerprint.php
 * @param mixed $x509 
 * @param string $hash_algorithm [optional] <p>
 * The hash algorithm to use, e.g. "md5" or "sha1"
 * </p>
 * @param bool $raw_output [optional] <p>
 * When set to true, outputs raw binary data. false outputs lowercase hexits.
 * </p>
 * @return bool a string containing the calculated certificate fingerprint as lowercase hexits unless raw_output is set to true in which case the raw binary representation of the message digest is returned.
 * </p>
 * <p>
 * Returns false on failure.
 */
function openssl_x509_fingerprint ($x509, $hash_algorithm = null, $raw_output = null) {}

/**
 * Exports a certificate to file
 * @link http://www.php.net/manual/en/function.openssl-x509-export-to-file.php
 * @param mixed $x509 
 * @param string $outfilename <p>
 * Path to the output file.
 * </p>
 * @param bool $notext [optional] &note.openssl.param-notext;
 * @return bool true on success or false on failure
 */
function openssl_x509_export_to_file ($x509, $outfilename, $notext = null) {}

/**
 * Exports a PKCS#12 Compatible Certificate Store File to variable.
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-export.php
 * @param mixed $x509 
 * @param string $out <p>
 * On success, this will hold the PKCS#12.
 * </p>
 * @param mixed $priv_key <p>
 * Private key component of PKCS#12 file.
 * </p>
 * @param string $pass <p>
 * Encryption password for unlocking the PKCS#12 file.
 * </p>
 * @param array $args [optional] <p>
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkcs12_export ($x509, &$out, $priv_key, $pass, array $args = null) {}

/**
 * Exports a PKCS#12 Compatible Certificate Store File
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-export-to-file.php
 * @param mixed $x509 
 * @param string $filename <p>
 * Path to the output file.
 * </p>
 * @param mixed $priv_key <p>
 * Private key component of PKCS#12 file.
 * </p>
 * @param string $pass <p>
 * Encryption password for unlocking the PKCS#12 file.
 * </p>
 * @param array $args [optional] <p>
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkcs12_export_to_file ($x509, $filename, $priv_key, $pass, array $args = null) {}

/**
 * Parse a PKCS#12 Certificate Store into an array
 * @link http://www.php.net/manual/en/function.openssl-pkcs12-read.php
 * @param string $pkcs12 <p>
 * </p>
 * @param array $certs <p>
 * On success, this will hold the Certificate Store Data.
 * </p>
 * @param string $pass <p>
 * Encryption password for unlocking the PKCS#12 file.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkcs12_read ($pkcs12, array &$certs, $pass) {}

/**
 * Generates a CSR
 * @link http://www.php.net/manual/en/function.openssl-csr-new.php
 * @param array $dn <p>
 * The Distinguished Name to be used in the certificate.
 * </p>
 * @param resource $privkey <p>
 * privkey should be set to a private key that was
 * previously generated by openssl_pkey_new (or
 * otherwise obtained from the other openssl_pkey family of functions).
 * The corresponding public portion of the key will be used to sign the
 * CSR.
 * </p>
 * @param array $configargs [optional] <p>
 * By default, the information in your system openssl.conf
 * is used to initialize the request; you can specify a configuration file
 * section by setting the config_section_section key of
 * configargs. You can also specify an alternative
 * openssl configuration file by setting the value of the
 * config key to the path of the file you want to use.
 * The following keys, if present in configargs
 * behave as their equivalents in the openssl.conf, as
 * listed in the table below.
 * <table>
 * Configuration overrides
 * <tr valign="top">
 * <td>configargs key</td>
 * <td>type</td>
 * <td>openssl.conf equivalent</td>
 * <td>description</td>
 * </tr>
 * <tr valign="top">
 * <td>digest_alg</td>
 * <td>string</td>
 * <td>default_md</td>
 * <td>Selects which digest method to use</td>
 * </tr>
 * <tr valign="top">
 * <td>x509_extensions</td>
 * <td>string</td>
 * <td>x509_extensions</td>
 * <td>Selects which extensions should be used when creating an x509
 * certificate</td>
 * </tr>
 * <tr valign="top">
 * <td>req_extensions</td>
 * <td>string</td>
 * <td>req_extensions</td>
 * <td>Selects which extensions should be used when creating a CSR</td>
 * </tr>
 * <tr valign="top">
 * <td>private_key_bits</td>
 * <td>integer</td>
 * <td>default_bits</td>
 * <td>Specifies how many bits should be used to generate a private
 * key</td>
 * </tr>
 * <tr valign="top">
 * <td>private_key_type</td>
 * <td>integer</td>
 * <td>none</td>
 * <td>Specifies the type of private key to create. This can be one
 * of OPENSSL_KEYTYPE_DSA,
 * OPENSSL_KEYTYPE_DH or
 * OPENSSL_KEYTYPE_RSA.
 * The default value is OPENSSL_KEYTYPE_RSA which
 * is currently the only supported key type.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>encrypt_key</td>
 * <td>boolean</td>
 * <td>encrypt_key</td>
 * <td>Should an exported key (with passphrase) be encrypted?</td>
 * </tr>
 * <tr valign="top">
 * <td>encrypt_key_cipher</td>
 * <td>integer</td>
 * <td>none</td>
 * <td>
 * One of cipher constants.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param array $extraattribs [optional] <p>
 * extraattribs is used to specify additional
 * configuration options for the CSR. Both dn and
 * extraattribs are associative arrays whose keys are
 * converted to OIDs and applied to the relevant part of the request.
 * </p>
 * @return mixed the CSR.
 */
function openssl_csr_new (array $dn, &$privkey, array $configargs = null, array $extraattribs = null) {}

/**
 * Exports a CSR as a string
 * @link http://www.php.net/manual/en/function.openssl-csr-export.php
 * @param resource $csr <p>
 * </p>
 * @param string $out <p>
 * </p>
 * @param bool $notext [optional] &note.openssl.param-notext;
 * @return bool true on success or false on failure
 */
function openssl_csr_export ($csr, &$out, $notext = null) {}

/**
 * Exports a CSR to a file
 * @link http://www.php.net/manual/en/function.openssl-csr-export-to-file.php
 * @param resource $csr <p>
 * </p>
 * @param string $outfilename <p>
 * Path to the output file.
 * </p>
 * @param bool $notext [optional] &note.openssl.param-notext;
 * @return bool true on success or false on failure
 */
function openssl_csr_export_to_file ($csr, $outfilename, $notext = null) {}

/**
 * Sign a CSR with another certificate (or itself) and generate a certificate
 * @link http://www.php.net/manual/en/function.openssl-csr-sign.php
 * @param mixed $csr <p>
 * A CSR previously generated by openssl_csr_new.
 * It can also be the path to a PEM encoded CSR when specified as
 * file://path/to/csr or an exported string generated
 * by openssl_csr_export.
 * </p>
 * @param mixed $cacert <p>
 * The generated certificate will be signed by cacert.
 * If cacert is &null;, the generated certificate
 * will be a self-signed certificate.
 * </p>
 * @param mixed $priv_key <p>
 * priv_key is the private key that corresponds to
 * cacert.
 * </p>
 * @param int $days <p>
 * days specifies the length of time for which the
 * generated certificate will be valid, in days.
 * </p>
 * @param array $configargs [optional] <p>
 * You can finetune the CSR signing by configargs.
 * See openssl_csr_new for more information about
 * configargs.
 * </p>
 * @param int $serial [optional] <p>
 * An optional the serial number of issued certificate. If not specified
 * it will default to 0.
 * </p>
 * @return resource an x509 certificate resource on success, false on failure.
 */
function openssl_csr_sign ($csr, $cacert, $priv_key, $days, array $configargs = null, $serial = null) {}

/**
 * Returns the subject of a CERT
 * @link http://www.php.net/manual/en/function.openssl-csr-get-subject.php
 * @param mixed $csr 
 * @param bool $use_shortnames [optional] 
 * @return array 
 */
function openssl_csr_get_subject ($csr, $use_shortnames = null) {}

/**
 * Returns the public key of a CERT
 * @link http://www.php.net/manual/en/function.openssl-csr-get-public-key.php
 * @param mixed $csr 
 * @param bool $use_shortnames [optional] 
 * @return resource 
 */
function openssl_csr_get_public_key ($csr, $use_shortnames = null) {}

/**
 * Computes a digest
 * @link http://www.php.net/manual/en/function.openssl-digest.php
 * @param string $data <p>
 * The data.
 * </p>
 * @param string $method <p>
 * The digest method.
 * </p>
 * @param bool $raw_output [optional] <p>
 * Setting to true will return as raw output data, otherwise the return
 * value is binhex encoded.
 * </p>
 * @return string the digested hash value on success or false on failure.
 */
function openssl_digest ($data, $method, $raw_output = null) {}

/**
 * Encrypts data
 * @link http://www.php.net/manual/en/function.openssl-encrypt.php
 * @param string $data <p>
 * The data.
 * </p>
 * @param string $method <p>
 * The cipher method.
 * </p>
 * @param string $password <p>
 * The password.
 * </p>
 * @param int $options [optional] <p>
 * options can be one of
 * OPENSSL_RAW_DATA,
 * OPENSSL_ZERO_PADDING.
 * </p>
 * @param string $iv [optional] <p>
 * A non-NULL Initialization Vector.
 * </p>
 * @return string the encrypted string on success or false on failure.
 */
function openssl_encrypt ($data, $method, $password, $options = null, $iv = null) {}

/**
 * Decrypts data
 * @link http://www.php.net/manual/en/function.openssl-decrypt.php
 * @param string $data <p>
 * The data.
 * </p>
 * @param string $method <p>
 * The cipher method.
 * </p>
 * @param string $password <p>
 * The password.
 * </p>
 * @param int $options [optional] <p>
 * options can be one of
 * OPENSSL_RAW_DATA,
 * OPENSSL_ZERO_PADDING.
 * </p>
 * @param string $iv [optional] <p>
 * A non-NULL Initialization Vector. 
 * </p>
 * @return string The decrypted string on success or false on failure.
 */
function openssl_decrypt ($data, $method, $password, $options = null, $iv = null) {}

/**
 * Gets the cipher iv length
 * @link http://www.php.net/manual/en/function.openssl-cipher-iv-length.php
 * @param string $method <p>
 * The cipher method, see openssl_get_cipher_methods for a list of potential values.
 * </p>
 * @return int the cipher length on success, or false on failure.
 */
function openssl_cipher_iv_length ($method) {}

/**
 * Generate signature
 * @link http://www.php.net/manual/en/function.openssl-sign.php
 * @param string $data <p>
 * The string of data you wish to sign
 * </p>
 * @param string $signature <p>
 * If the call was successful the signature is returned in
 * signature.
 * </p>
 * @param mixed $priv_key_id <p>
 * resource - a key, returned by openssl_get_privatekey
 * </p>
 * <p>
 * string - a PEM formatted key
 * </p>
 * @param mixed $signature_alg [optional] <p>
 * int - one of these Signature Algorithms.
 * </p>
 * <p>
 * string - a valid string returned by openssl_get_md_methods example, "sha256WithRSAEncryption" or "sha384".
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_sign ($data, &$signature, $priv_key_id, $signature_alg = null) {}

/**
 * Verify signature
 * @link http://www.php.net/manual/en/function.openssl-verify.php
 * @param string $data <p>
 * The string of data used to generate the signature previously
 * </p>
 * @param string $signature <p>
 * A raw binary string, generated by openssl_sign or similar means
 * </p>
 * @param mixed $pub_key_id <p>
 * resource - a key, returned by openssl_get_publickey
 * </p>
 * <p>
 * string - a PEM formatted key, example, "-----BEGIN PUBLIC KEY-----
 * MIIBCgK..."
 * </p>
 * @param mixed $signature_alg [optional] <p>
 * int - one of these Signature Algorithms.
 * </p>
 * <p>
 * string - a valid string returned by openssl_get_md_methods example, "sha1WithRSAEncryption" or "sha512".
 * </p>
 * @return int 1 if the signature is correct, 0 if it is incorrect, and
 * -1 on error.
 */
function openssl_verify ($data, $signature, $pub_key_id, $signature_alg = null) {}

/**
 * Seal (encrypt) data
 * @link http://www.php.net/manual/en/function.openssl-seal.php
 * @param string $data <p>
 * </p>
 * @param string $sealed_data <p>
 * </p>
 * @param array $env_keys <p>
 * </p>
 * @param array $pub_key_ids <p>
 * </p>
 * @param string $method [optional] 
 * @return int the length of the sealed data on success, or false on error.
 * If successful the sealed data is returned in
 * sealed_data, and the envelope keys in
 * env_keys.
 */
function openssl_seal ($data, &$sealed_data, array &$env_keys, array $pub_key_ids, $method = null) {}

/**
 * Open sealed data
 * @link http://www.php.net/manual/en/function.openssl-open.php
 * @param string $sealed_data <p>
 * </p>
 * @param string $open_data <p>
 * If the call is successful the opened data is returned in this
 * parameter.
 * </p>
 * @param string $env_key <p>
 * </p>
 * @param mixed $priv_key_id <p>
 * </p>
 * @param string $method [optional] 
 * @return bool true on success or false on failure
 */
function openssl_open ($sealed_data, &$open_data, $env_key, $priv_key_id, $method = null) {}

/**
 * Generates a PKCS5 v2 PBKDF2 string, defaults to SHA-1
 * @link http://www.php.net/manual/en/function.openssl-pbkdf2.php
 * @param string $password <p>
 * </p>
 * @param string $salt <p>
 * </p>
 * @param int $key_length <p>
 * </p>
 * @param int $iterations <p>
 * </p>
 * @param string $digest_algorithm [optional] <p>
 * </p>
 * @return string string or false on failure.
 */
function openssl_pbkdf2 ($password, $salt, $key_length, $iterations, $digest_algorithm = null) {}

/**
 * Verifies the signature of an S/MIME signed message
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-verify.php
 * @param string $filename <p>
 * Path to the message.
 * </p>
 * @param int $flags <p>
 * flags can be used to affect how the signature is
 * verified - see PKCS7 constants
 * for more information.
 * </p>
 * @param string $outfilename [optional] <p>
 * If the outfilename is specified, it should be a
 * string holding the name of a file into which the certificates of the
 * persons that signed the messages will be stored in PEM format.
 * </p>
 * @param array $cainfo [optional] <p>
 * If the cainfo is specified, it should hold
 * information about the trusted CA certificates to use in the verification
 * process - see certificate
 * verification for more information about this parameter.
 * </p>
 * @param string $extracerts [optional] <p>
 * If the extracerts is specified, it is the filename
 * of a file containing a bunch of certificates to use as untrusted CAs.
 * </p>
 * @param string $content [optional] <p>
 * You can specify a filename with content that will
 * be filled with the verified data, but with the signature information
 * stripped.
 * </p>
 * @return mixed true if the signature is verified, false if it is not correct
 * (the message has been tampered with, or the signing certificate is invalid),
 * or -1 on error.
 */
function openssl_pkcs7_verify ($filename, $flags, $outfilename = null, array $cainfo = null, $extracerts = null, $content = null) {}

/**
 * Decrypts an S/MIME encrypted message
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-decrypt.php
 * @param string $infilename <p>
 * </p>
 * @param string $outfilename <p>
 * The decrypted message is written to the file specified by
 * outfilename.
 * </p>
 * @param mixed $recipcert <p>
 * </p>
 * @param mixed $recipkey [optional] <p>
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkcs7_decrypt ($infilename, $outfilename, $recipcert, $recipkey = null) {}

/**
 * Sign an S/MIME message
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-sign.php
 * @param string $infilename <p>
 * </p>
 * @param string $outfilename <p>
 * </p>
 * @param mixed $signcert <p>
 * </p>
 * @param mixed $privkey <p>
 * </p>
 * @param array $headers <p>
 * headers is an array of headers that
 * will be prepended to the data after it has been signed (see
 * openssl_pkcs7_encrypt for more information about
 * the format of this parameter).
 * </p>
 * @param int $flags [optional] <p>
 * flags can be used to alter the output - see PKCS7 constants.
 * </p>
 * @param string $extracerts [optional] <p>
 * extracerts specifies the name of a file containing
 * a bunch of extra certificates to include in the signature which can for
 * example be used to help the recipient to verify the certificate that you used.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkcs7_sign ($infilename, $outfilename, $signcert, $privkey, array $headers, $flags = null, $extracerts = null) {}

/**
 * Encrypt an S/MIME message
 * @link http://www.php.net/manual/en/function.openssl-pkcs7-encrypt.php
 * @param string $infile <p>
 * </p>
 * @param string $outfile <p>
 * </p>
 * @param mixed $recipcerts <p>
 * Either a lone X.509 certificate, or an array of X.509 certificates.
 * </p>
 * @param array $headers <p>
 * headers is an array of headers that
 * will be prepended to the data after it has been encrypted.
 * </p>
 * <p>
 * headers can be either an associative array
 * keyed by header name, or an indexed array, where each element contains
 * a single header line.
 * </p>
 * @param int $flags [optional] <p>
 * flags can be used to specify options that affect
 * the encoding process - see PKCS7
 * constants.
 * </p>
 * @param int $cipherid [optional] <p>
 * One of cipher constants.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_pkcs7_encrypt ($infile, $outfile, $recipcerts, array $headers, $flags = null, $cipherid = null) {}

/**
 * Encrypts data with private key
 * @link http://www.php.net/manual/en/function.openssl-private-encrypt.php
 * @param string $data <p>
 * </p>
 * @param string $crypted <p>
 * </p>
 * @param mixed $key <p>
 * </p>
 * @param int $padding [optional] <p>
 * padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_NO_PADDING.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_private_encrypt ($data, &$crypted, $key, $padding = null) {}

/**
 * Decrypts data with private key
 * @link http://www.php.net/manual/en/function.openssl-private-decrypt.php
 * @param string $data <p>
 * </p>
 * @param string $decrypted <p>
 * </p>
 * @param mixed $key <p>
 * key must be the private key corresponding that
 * was used to encrypt the data. 
 * </p>
 * @param int $padding [optional] <p>
 * padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_SSLV23_PADDING,
 * OPENSSL_PKCS1_OAEP_PADDING,
 * OPENSSL_NO_PADDING.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_private_decrypt ($data, &$decrypted, $key, $padding = null) {}

/**
 * Encrypts data with public key
 * @link http://www.php.net/manual/en/function.openssl-public-encrypt.php
 * @param string $data <p>
 * </p>
 * @param string $crypted <p>
 * This will hold the result of the encryption.
 * </p>
 * @param mixed $key <p>
 * The public key.
 * </p>
 * @param int $padding [optional] <p>
 * padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_SSLV23_PADDING,
 * OPENSSL_PKCS1_OAEP_PADDING,
 * OPENSSL_NO_PADDING.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_public_encrypt ($data, &$crypted, $key, $padding = null) {}

/**
 * Decrypts data with public key
 * @link http://www.php.net/manual/en/function.openssl-public-decrypt.php
 * @param string $data <p>
 * </p>
 * @param string $decrypted <p>
 * </p>
 * @param mixed $key <p>
 * key must be the public key corresponding that
 * was used to encrypt the data. 
 * </p>
 * @param int $padding [optional] <p>
 * padding can be one of
 * OPENSSL_PKCS1_PADDING,
 * OPENSSL_NO_PADDING.
 * </p>
 * @return bool true on success or false on failure
 */
function openssl_public_decrypt ($data, &$decrypted, $key, $padding = null) {}

/**
 * Gets available digest methods
 * @link http://www.php.net/manual/en/function.openssl-get-md-methods.php
 * @param bool $aliases [optional] <p>
 * Set to true if digest aliases should be included within the
 * returned array.
 * </p>
 * @return array An array of available digest methods.
 */
function openssl_get_md_methods ($aliases = null) {}

/**
 * Gets available cipher methods
 * @link http://www.php.net/manual/en/function.openssl-get-cipher-methods.php
 * @param bool $aliases [optional] <p>
 * Set to true if cipher aliases should be included within the
 * returned array.
 * </p>
 * @return array An array of available cipher methods.
 */
function openssl_get_cipher_methods ($aliases = null) {}

/**
 * Computes shared secret for public value of remote DH key and local DH key
 * @link http://www.php.net/manual/en/function.openssl-dh-compute-key.php
 * @param string $pub_key <p>
 * Public key
 * </p>
 * @param resource $dh_key <p>
 * DH key
 * </p>
 * @return string computed key on success or false on failure.
 */
function openssl_dh_compute_key ($pub_key, $dh_key) {}

/**
 * Generate a pseudo-random string of bytes
 * @link http://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php
 * @param int $length <p>
 * The length of the desired string of bytes. Must be a positive integer. PHP will
 * try to cast this parameter to a non-null integer to use it. 
 * </p>
 * @param bool $crypto_strong [optional] <p>
 * If passed into the function, this will hold a boolean value that determines
 * if the algorithm used was "cryptographically strong", e.g., safe for usage with GPG, 
 * passwords, etc. true if it did, otherwise false
 * </p>
 * @return string the generated &string; of bytes on success, or false on failure.
 */
function openssl_random_pseudo_bytes ($length, &$crypto_strong = null) {}

/**
 * Return openSSL error message
 * @link http://www.php.net/manual/en/function.openssl-error-string.php
 * @return string an error message string, or false if there are no more error
 * messages to return.
 */
function openssl_error_string () {}

define ('OPENSSL_VERSION_TEXT', "OpenSSL 1.0.1f 6 Jan 2014");
define ('OPENSSL_VERSION_NUMBER', 268439663);
define ('X509_PURPOSE_SSL_CLIENT', 1);
define ('X509_PURPOSE_SSL_SERVER', 2);
define ('X509_PURPOSE_NS_SSL_SERVER', 3);
define ('X509_PURPOSE_SMIME_SIGN', 4);
define ('X509_PURPOSE_SMIME_ENCRYPT', 5);
define ('X509_PURPOSE_CRL_SIGN', 6);
define ('X509_PURPOSE_ANY', 7);
define ('OPENSSL_ALGO_SHA1', 1);
define ('OPENSSL_ALGO_MD5', 2);
define ('OPENSSL_ALGO_MD4', 3);
define ('OPENSSL_ALGO_DSS1', 5);
define ('OPENSSL_ALGO_SHA224', 6);
define ('OPENSSL_ALGO_SHA256', 7);
define ('OPENSSL_ALGO_SHA384', 8);
define ('OPENSSL_ALGO_SHA512', 9);
define ('OPENSSL_ALGO_RMD160', 10);
define ('PKCS7_DETACHED', 64);
define ('PKCS7_TEXT', 1);
define ('PKCS7_NOINTERN', 16);
define ('PKCS7_NOVERIFY', 32);
define ('PKCS7_NOCHAIN', 8);
define ('PKCS7_NOCERTS', 2);
define ('PKCS7_NOATTR', 256);
define ('PKCS7_BINARY', 128);
define ('PKCS7_NOSIGS', 4);
define ('OPENSSL_PKCS1_PADDING', 1);
define ('OPENSSL_SSLV23_PADDING', 2);
define ('OPENSSL_NO_PADDING', 3);
define ('OPENSSL_PKCS1_OAEP_PADDING', 4);
define ('OPENSSL_DEFAULT_STREAM_CIPHERS', "ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES256-GCM-SHA384:DHE-RSA-AES128-GCM-SHA256:DHE-DSS-AES128-GCM-SHA256:kEDH+AESGCM:ECDHE-RSA-AES128-SHA256:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA:ECDHE-ECDSA-AES128-SHA:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA:ECDHE-ECDSA-AES256-SHA:DHE-RSA-AES128-SHA256:DHE-RSA-AES128-SHA:DHE-DSS-AES128-SHA256:DHE-RSA-AES256-SHA256:DHE-DSS-AES256-SHA:DHE-RSA-AES256-SHA:AES128-GCM-SHA256:AES256-GCM-SHA384:AES128:AES256:HIGH:!SSLv2:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!RC4:!ADH");
define ('OPENSSL_CIPHER_RC2_40', 0);
define ('OPENSSL_CIPHER_RC2_128', 1);
define ('OPENSSL_CIPHER_RC2_64', 2);
define ('OPENSSL_CIPHER_DES', 3);
define ('OPENSSL_CIPHER_3DES', 4);
define ('OPENSSL_CIPHER_AES_128_CBC', 5);
define ('OPENSSL_CIPHER_AES_192_CBC', 6);
define ('OPENSSL_CIPHER_AES_256_CBC', 7);
define ('OPENSSL_KEYTYPE_RSA', 0);
define ('OPENSSL_KEYTYPE_DSA', 1);
define ('OPENSSL_KEYTYPE_DH', 2);
define ('OPENSSL_KEYTYPE_EC', 3);
define ('OPENSSL_RAW_DATA', 1);
define ('OPENSSL_ZERO_PADDING', 2);
define ('OPENSSL_TLSEXT_SERVER_NAME', 1);

// End of openssl v.7.0.0-dev
