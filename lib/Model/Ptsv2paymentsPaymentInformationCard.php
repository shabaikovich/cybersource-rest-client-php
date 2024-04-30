<?php
/**
 * Ptsv2paymentsPaymentInformationCard
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv2paymentsPaymentInformationCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsPaymentInformationCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_paymentInformation_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'type' => 'string',
        'useAs' => 'string',
        'sourceAccountType' => 'string',
        'sourceAccountTypeDetails' => 'string',
        'securityCode' => 'string',
        'securityCodeIndicator' => 'string',
        'accountEncoderId' => 'string',
        'issueNumber' => 'string',
        'startMonth' => 'string',
        'startYear' => 'string',
        'productName' => 'string',
        'typeSelectionIndicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'expirationMonth' => null,
        'expirationYear' => null,
        'type' => null,
        'useAs' => null,
        'sourceAccountType' => null,
        'sourceAccountTypeDetails' => null,
        'securityCode' => null,
        'securityCodeIndicator' => null,
        'accountEncoderId' => null,
        'issueNumber' => null,
        'startMonth' => null,
        'startYear' => null,
        'productName' => null,
        'typeSelectionIndicator' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'number' => 'number',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'type' => 'type',
        'useAs' => 'useAs',
        'sourceAccountType' => 'sourceAccountType',
        'sourceAccountTypeDetails' => 'sourceAccountTypeDetails',
        'securityCode' => 'securityCode',
        'securityCodeIndicator' => 'securityCodeIndicator',
        'accountEncoderId' => 'accountEncoderId',
        'issueNumber' => 'issueNumber',
        'startMonth' => 'startMonth',
        'startYear' => 'startYear',
        'productName' => 'productName',
        'typeSelectionIndicator' => 'typeSelectionIndicator'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'type' => 'setType',
        'useAs' => 'setUseAs',
        'sourceAccountType' => 'setSourceAccountType',
        'sourceAccountTypeDetails' => 'setSourceAccountTypeDetails',
        'securityCode' => 'setSecurityCode',
        'securityCodeIndicator' => 'setSecurityCodeIndicator',
        'accountEncoderId' => 'setAccountEncoderId',
        'issueNumber' => 'setIssueNumber',
        'startMonth' => 'setStartMonth',
        'startYear' => 'setStartYear',
        'productName' => 'setProductName',
        'typeSelectionIndicator' => 'setTypeSelectionIndicator'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'type' => 'getType',
        'useAs' => 'getUseAs',
        'sourceAccountType' => 'getSourceAccountType',
        'sourceAccountTypeDetails' => 'getSourceAccountTypeDetails',
        'securityCode' => 'getSecurityCode',
        'securityCodeIndicator' => 'getSecurityCodeIndicator',
        'accountEncoderId' => 'getAccountEncoderId',
        'issueNumber' => 'getIssueNumber',
        'startMonth' => 'getStartMonth',
        'startYear' => 'getStartYear',
        'productName' => 'getProductName',
        'typeSelectionIndicator' => 'getTypeSelectionIndicator'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['useAs'] = isset($data['useAs']) ? $data['useAs'] : null;
        $this->container['sourceAccountType'] = isset($data['sourceAccountType']) ? $data['sourceAccountType'] : null;
        $this->container['sourceAccountTypeDetails'] = isset($data['sourceAccountTypeDetails']) ? $data['sourceAccountTypeDetails'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
        $this->container['securityCodeIndicator'] = isset($data['securityCodeIndicator']) ? $data['securityCodeIndicator'] : null;
        $this->container['accountEncoderId'] = isset($data['accountEncoderId']) ? $data['accountEncoderId'] : null;
        $this->container['issueNumber'] = isset($data['issueNumber']) ? $data['issueNumber'] : null;
        $this->container['startMonth'] = isset($data['startMonth']) ? $data['startMonth'] : null;
        $this->container['startYear'] = isset($data['startYear']) ? $data['startYear'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['typeSelectionIndicator'] = isset($data['typeSelectionIndicator']) ? $data['typeSelectionIndicator'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number The customer's payment card number, also known as the Primary Account Number (PAN). You can also use this field for encoded account numbers.  #### FDMS Nashville Required. String (19)  #### GPX Required if `pointOfSaleInformation.entryMode=keyed`. However, this field is optional if your account is configured for relaxed requirements for address data and expiration date. **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  #### All other processors Required if `pointOfSaleInformation.entryMode=keyed`. However, this field is optional if your account is configured for relaxed requirements for address data and expiration date. **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth Two-digit month in which the payment card expires.  Format: `MM`.  Valid values: `01` through `12`. Leading 0 is required.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`01` through `12`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (_type_=039), if there is no expiration date on the card, use `12`.  #### FDMS Nashville Required field.  #### All other processors Required if `pointOfSaleInformation.entryMode=keyed`. However, this field is optional if your account is configured for relaxed requirements for address data and expiration date. **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  #### Google Pay transactions For PAN-based Google Pay transactions, this field is returned in the API response.
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear Four-digit year in which the payment card expires.  Format: `YYYY`.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`1900` through `3000`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (**_type_**`=039`), if there is no expiration date on the card, use `2021`.  #### FDMS Nashville Required field.  #### FDC Nashville Global and FDMS South You can send in 2 digits or 4 digits. If you send in 2 digits, they must be the last 2 digits of the year.  #### All other processors Required if `pointOfSaleInformation.entryMode=keyed`. However, this field is optional if your account is configured for relaxed requirements for address data and expiration date. **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  #### Google Pay transactions For PAN-based Google Pay transactions, this field is returned in the API response.
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        $this->container['expirationYear'] = $expirationYear;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Three-digit value that indicates the card type.  **IMPORTANT** It is strongly recommended that you include the card type field in request messages even if it is optional for your processor and card type. Omitting the card type can cause the transaction to be processed with the wrong card type.  Possible values: - `001`: Visa. For card-present transactions on all processors except SIX, the Visa Electron card type is processed the same way that the Visa debit card is processed. Use card type value `001` for Visa Electron. - `002`: Mastercard, Eurocard[^1], which is a European regional brand of Mastercard. - `003`: American Express - `004`: Discover - `005`: Diners Club - `006`: Carte Blanche[^1] - `007`: JCB[^1] - `014`: Enroute[^1] - `021`: JAL[^1] - `024`: Maestro (UK Domestic)[^1] - `031`: Delta[^1]: Use this value only for Ingenico ePayments. For other processors, use `001` for all Visa card types. - `033`: Visa Electron[^1]. Use this value only for Ingenico ePayments and SIX. For other processors, use `001` for all Visa card types. - `034`: Dankort[^1] - `036`: Cartes Bancaires[^1,4] - `037`: Carta Si[^1] - `039`: Encoded account number[^1] - `040`: UATP[^1] - `042`: Maestro (International)[^1] - `050`: Hipercard[^2,3] - `051`: Aura - `054`: Elo[^3] - `062`: China UnionPay - '070': EFTPOS  [^1]: For this card type, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in your request for an authorization or a stand-alone credit. [^2]: For this card type on Cielo 3.0, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in a request for an authorization or a stand-alone credit. This card type is not supported on Cielo 1.5. [^3]: For this card type on Getnet and Rede, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in a request for an authorization or a stand-alone credit. [^4]: For this card type, you must include the `paymentInformation.card.type` in your request for any payer authentication services.  #### Used by **Authorization** Required for Carte Blanche and JCB. Optional for all other card types.  #### Card Present reply This field is included in the reply message when the client software that is installed on the POS terminal uses the token management service (TMS) to retrieve tokenized payment details. You must contact customer support to have your account enabled to receive these fields in the credit reply message.  Returned by the Credit service.  This reply field is only supported by the following processors: - American Express Direct - Credit Mutuel-CIC - FDC Nashville Global - OmniPay Direct - SIX  #### Google Pay transactions For PAN-based Google Pay transactions, this field is returned in the API response.  #### GPX This field only supports transactions from the following card types: - Visa - Mastercard - AMEX - Discover - Diners - JCB - Union Pay International
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets useAs
     * @return string
     */
    public function getUseAs()
    {
        return $this->container['useAs'];
    }

    /**
     * Sets useAs
     * @param string $useAs Flag that specifies the type of account associated with the card. This field is available only for China UnionPay, Cielo, Comercio Latino and Visa Platform Connect. The cardholder provides this information during the payment process.  This field is required for:  - Debit transactions on Cielo and Comercio Latino.  - Transactions with Brazilian-issued cards on CyberSource through VisaNet.  **China UnionPayCard Transactions on China UnionPay:** Possible values:  - C: Domestic credit card  - D: Domestic debit card  - F: International credit card  - I: International debit card  When the value is D, the e-commerce indicator and CAVV fields must be included in the authorization request. When the value is C, F or I the card verification number, expiration month and expiration year fields must in included in the authorization request.  **Cielo and Comercio Latino Credit Card Transactions:** On these processors, this field is supported only for authorizations. Possible values:  - CR: Credit card  - DB: Debit card       **Visa Platform Connect Credit Card Transactions:** This field is supported only for all card Types on Visa Platform Connect.  A value of CR or DB in the useAs field takes precedence over any value in the Source Account Type field.
     * @return $this
     */
    public function setUseAs($useAs)
    {
        $this->container['useAs'] = $useAs;

        return $this;
    }

    /**
     * Gets sourceAccountType
     * @return string
     */
    public function getSourceAccountType()
    {
        return $this->container['sourceAccountType'];
    }

    /**
     * Sets sourceAccountType
     * @param string $sourceAccountType Flag that specifies the type of account associated with the card.  The cardholder provides this information during the payment process.  This field is required in the following cases:   - Debit transactions on Cielo and Comercio Latino.   - Transactions with Brazilian-issued cards on CyberSource through VisaNet.   - Applicable only for CyberSource through VisaNet (CtV).  **Note** Combo cards in Brazil contain credit and debit functionality in a single card. Visa systems use a credit bank identification number (BIN) for this type of card. Using the BIN to determine whether a card is debit or credit can cause transactions with these cards to be processed incorrectly. CyberSource strongly recommends that you include this field for combo card transactions.  Possible values include the following.   - `CH`: Checking account  - `CR`: Credit card account  - `SA`: Saving account  - `LI`: Line of credit or credit portion of combo card  - `PP`: Prepaid card account or prepaid portion of combo card  - `UA`: Universal account  If useAs is set to credit/debit and there is a value in SourceAccountType, the value in the SourceAccountType field will take precedence. If useAs is set to CR/DB and there is a value in SourceAccountType, the value in the useAs field will take precedence.
     * @return $this
     */
    public function setSourceAccountType($sourceAccountType)
    {
        $this->container['sourceAccountType'] = $sourceAccountType;

        return $this;
    }

    /**
     * Gets sourceAccountTypeDetails
     * @return string
     */
    public function getSourceAccountTypeDetails()
    {
        return $this->container['sourceAccountTypeDetails'];
    }

    /**
     * Sets sourceAccountTypeDetails
     * @param string $sourceAccountTypeDetails Type of account that is being used when the value for the override_payment_method field is line of credit (LI) or prepaid card (PP). Possible values for line of credit: - `AGRC`: Visa Agro Custeio - `AGRE`: Visa Agro Electron - `AGRI`: Visa Agro Investimento - `AGRO`: Visa Agro Possible values for prepaid card: - `VVA`: Visa Vale Alimentacao - `VVF`: Visa Vale Flex - `VVR`: Visa Vale Refeicao This field is supported only for combo card transactions in Brazil on CyberSource through VisaNet.
     * @return $this
     */
    public function setSourceAccountTypeDetails($sourceAccountTypeDetails)
    {
        $this->container['sourceAccountTypeDetails'] = $sourceAccountTypeDetails;

        return $this;
    }

    /**
     * Gets securityCode
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->container['securityCode'];
    }

    /**
     * Sets securityCode
     * @param string $securityCode Card Verification Number.  #### FDMS Nashville Required for American Express or if swiped; otherwise, optional.  #### Ingenico ePayments Do not include this field when `commerceIndicator=recurring`. **Note** Ingenico ePayments was previously called _Global Collect_.  #### TSYS Acquiring Solutions Optional if pointOfSaleInformation.entryMode=keyed; otherwise, not used.  #### GPX Optional.  #### All other processors: Optional.
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        $this->container['securityCode'] = $securityCode;

        return $this;
    }

    /**
     * Gets securityCodeIndicator
     * @return string
     */
    public function getSecurityCodeIndicator()
    {
        return $this->container['securityCodeIndicator'];
    }

    /**
     * Sets securityCodeIndicator
     * @param string $securityCodeIndicator Indicates whether a CVN code was sent. Possible values:   - `0` (default): CVN service not requested. This default value is used when you do not include      `securityCode` field in the request.  - `1` (default): CVN service requested and supported. This default value is used when you include      `securityCode` field in the request.  - `2`: CVN on credit card is illegible.  - `9`: CVN was not imprinted on credit card.  #### FDMS Nashville Required for American Express cards; otherwise, optional.  #### TSYS Acquiring Solutions Optional if `pointOfSaleInformation.entryMode=keyed`; otherwise, not used.  #### All other processors Optional.
     * @return $this
     */
    public function setSecurityCodeIndicator($securityCodeIndicator)
    {
        $this->container['securityCodeIndicator'] = $securityCodeIndicator;

        return $this;
    }

    /**
     * Gets accountEncoderId
     * @return string
     */
    public function getAccountEncoderId()
    {
        return $this->container['accountEncoderId'];
    }

    /**
     * Sets accountEncoderId
     * @param string $accountEncoderId Identifier for the issuing bank that provided the customer's encoded account number. Contact your processor for the bank's ID.
     * @return $this
     */
    public function setAccountEncoderId($accountEncoderId)
    {
        $this->container['accountEncoderId'] = $accountEncoderId;

        return $this;
    }

    /**
     * Gets issueNumber
     * @return string
     */
    public function getIssueNumber()
    {
        return $this->container['issueNumber'];
    }

    /**
     * Sets issueNumber
     * @param string $issueNumber Number of times a Maestro (UK Domestic) card has been issued to the account holder. The card might or might not have an issue number. The number can consist of one or two digits, and the first digit might be a zero. When you include this value in your request, include exactly what is printed on the card. A value of 2 is different than a value of 02. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card.  **Note** The issue number is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setIssueNumber($issueNumber)
    {
        $this->container['issueNumber'] = $issueNumber;

        return $this;
    }

    /**
     * Gets startMonth
     * @return string
     */
    public function getStartMonth()
    {
        return $this->container['startMonth'];
    }

    /**
     * Sets startMonth
     * @param string $startMonth Month of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: MM`. Possible values: 01 through 12.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartMonth($startMonth)
    {
        $this->container['startMonth'] = $startMonth;

        return $this;
    }

    /**
     * Gets startYear
     * @return string
     */
    public function getStartYear()
    {
        return $this->container['startYear'];
    }

    /**
     * Sets startYear
     * @param string $startYear Year of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: YYYY`.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartYear($startYear)
    {
        $this->container['startYear'] = $startYear;

        return $this;
    }

    /**
     * Gets productName
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     * @param string $productName Name of the card product.  Possible value: - BNDES  This field is supported only for BNDES transactions on CyberSource through VisaNet.  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR4 - Position: 115-120 - Field: Brazil Country Data
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets typeSelectionIndicator
     * @return string
     */
    public function getTypeSelectionIndicator()
    {
        return $this->container['typeSelectionIndicator'];
    }

    /**
     * Sets typeSelectionIndicator
     * @param string $typeSelectionIndicator Flag that identifies how the card type was selected.  Possible values: - 0: Card type was selected based on default acquirer settings. - 1: Customer selected the card type.
     * @return $this
     */
    public function setTypeSelectionIndicator($typeSelectionIndicator)
    {
        $this->container['typeSelectionIndicator'] = $typeSelectionIndicator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


