<?php declare( strict_types = 1 );
namespace CodeKandis\TiphyLdapIntegration\Configurations;

use CodeKandis\Configurations\AbstractConfiguration;
use CodeKandis\Ldap\Configurations\LdapConfigurationInterface;

/**
 * Represents a LDAP configuration.
 * @package codekandis/tiphy-ldap-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
class LdapConfiguration extends AbstractConfiguration implements LdapConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getServerName(): string
	{
		return $this->read( 'serverName' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getServerPort(): int
	{
		return $this->readOrDefault( 'serverPort', 389 );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getServerDn(): ?string
	{
		return $this->readOrNull( 'serverDn' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getProtocolVersion(): int
	{
		return $this->readOrDefault( 'protocolVersion', 3 );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAdditionalOptions(): array
	{
		return $this->readOrDefault( 'additionalOptions', [] );
	}
}
