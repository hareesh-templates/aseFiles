<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'phplist/base-distribution';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.13.3@648b0343343565c4a056bfc8392201385e8d89f0',
  'doctrine/cache' => '1.13.0@56cd022adb5514472cb144c087393c1821911d09',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/doctrine-bundle' => '1.12.13@85460b85edd8f61a16ad311e7ffc5d255d3c937c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.3@1034e5e71f89978b80f9c1570e7226f6c3b9b6fb',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'friendsofsymfony/rest-bundle' => '2.8.6@369149f1de7f6519960fb1bb54c73e1b8c7dddcf',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/metadata' => '1.7.0@e5854ab1aa643623dc64adde718a8eec32b957a8',
  'jms/parser-lib' => '1.0.1@4f45952f9fa97d67adc5dd69e7d622fc89a7675d',
  'jms/serializer' => '1.14.1@ba908d278fff27ec01fb4349f372634ffcd697c0',
  'jms/serializer-bundle' => '2.4.4@92ee808c64c1c180775a0e57d00e3be0674668fb',
  'monolog/monolog' => '1.27.1@904713c5929655dc9b97288b69cfeedad610c9a1',
  'phpcollection/phpcollection' => '0.6.0@56d18c8c2c0400f2838703246ac7de919a605763',
  'phplist/core' => 'dev-phplist3@4a618d79c6e5ca4ee2a0131c15dbfd54b6221b6f',
  'phplist/rest-api' => 'dev-phplist3@26ea3c8d3efbf1e4df0c7602e8bb541333b21d1c',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'roave/security-advisories' => 'dev-master@4ed057f00e70bf1a45434fbc6fe14790684ff3c5',
  'sensio/distribution-bundle' => 'v5.0.25@80a38234bde8321fb92aa0b8c27978a272bb4baf',
  'sensio/framework-extra-bundle' => 'v5.1.0@bbf545277bc238334d008e4ff47f3850be00f122',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/http-client' => 'v5.4.14@8a3929c814cba77db93de61c22759e0dbeaa4c87',
  'symfony/http-client-contracts' => 'v2.5.2@ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
  'symfony/mime' => 'v5.4.13@bb2ccf759e2b967dcd11bdee5bdf30dddd2290bd',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/polyfill-apcu' => 'v1.26.0@43273a33c46f9d5a08dac76859f63d6814242e81',
  'symfony/polyfill-ctype' => 'v1.26.0@6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
  'symfony/polyfill-intl-icu' => 'v1.26.0@e407643d610e5f2c8a4b14189150f68934bf5e48',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/polyfill-php72' => 'v1.26.0@bf44a9fd41feaac72b074de600314a93e2ae78e2',
  'symfony/polyfill-php73' => 'v1.26.0@e440d35fa0286f77fb45b79a03fedbeda9307e85',
  'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/symfony' => 'v3.4.49@ba0e346e3ad11de4a307fe4fa2452a3656dcc17b',
  'twig/twig' => 'v2.15.3@ab402673db8746cb3a4c46f3869d6253699f614a',
  'willdurand/jsonp-callback-validator' => 'v1.1.0@1a7d388bb521959e612ef50c5c7b1691b097e909',
  'willdurand/negotiation' => '3.1.0@68e9ea0553ef6e2ee8db5c1d98829f111e623ec2',
  'phplist/base-distribution' => 'v3.6.10@f34d65ec3fe1cfce20983ad1148369f65d03150b',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
