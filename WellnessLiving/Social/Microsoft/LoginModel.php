<?php

namespace WellnessLiving\Social\Microsoft;

/**
 * API point to perform primitive Microsoft authorization actions.
 */
class LoginModel extends Api
{
  /**
   * `true` is a given user has bound Microsoft account; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_exists = false;

  /**
   * If authorization is performed in a third-party application, set this flag in case of authorization errors.
   *
   * @post get
   * @var bool
   */
  public $is_external = false;

  /**
   * The authorization code that the app requested.
   *
   * @post post
   * @var string
   */
  public $s_code = '';

  /**
   * If a state parameter is included in the request, the same value should appear in the response.
   * The app should verify that the state values in the request and response are identical.
   *
   * @post post
   * @var string
   */
  public $s_state = '';

  /**
   * The client for whom the Microsoft account will be unlinked.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * Microsoft OAuth 2.0 authorization link.
   *
   * @get result
   * @var string
   */
  public $url_login = '';

  /**
   * Redirect URI for external applications.
   * Link to the page on which Microsoft will return the result after authorization.
   *
   * * All possible links must be registered in the Microsoft application used for authorization.
   * * WARNING: Do not use this link for a direct redirect. This will lead to vulnerability.
   *
   * * An {@link LoginModel::$url_login} link will be generated along with this redirect URI.
   * * When checking the received {@link LoginModel::$s_code} from Microsoft, the link must be sent along with it to the {@link LoginModel::post()} method.
   *
   * @get get
   * @post get
   * @var string
   */
  public $url_redirect = '';
}

?>