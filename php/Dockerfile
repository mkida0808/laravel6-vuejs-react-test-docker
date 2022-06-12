#
#   Apache + PHP + Laravel
#
#   2022-05-24  M.Kida
#
#   CentOS
#      OS verion: 7.9.2009
#   Apache
#      Server version: Apache/2.4.53 (IUS)
#      Server built:   Mar 22 2022 16:35:42
#   PHP
#      PHP 7.4.29 (cli) (built: Apr 12 2022 10:55:38) ( NTS )
#      Copyright (c) The PHP Group
#      Zend Engine v3.4.0, Copyright (c) Zend Technologies with Zend OPcache v7.4.29, Copyright (c), by Zend Technologies
#   Composer
#      Composer version: 2.3.5 2022-04-13 16:43:00
#

# 利用するOSイメージ
FROM centos:centos7.9.2009

# update yum
RUN yum update -y \
  && yum clean all

# epel,remi (php7.4を入れるため)
RUN yum install -y epel-release \
  && yum install -y http://rpms.famillecollet.com/enterprise/remi-release-7.rpm \
  && yum clean all \
  && sed -i -e "s/enabled *= *1/enabled=0/g" /etc/yum.repos.d/epel.repo \
  && sed -i -e "s/enabled *= *1/enabled=0/g" /etc/yum.repos.d/remi.repo

# ius（最新のApache httpd を入れるため）
RUN yum install -y https://repo.ius.io/ius-release-el7.rpm \
  && yum clean all \
  && sed -i -e "s/enabled *= *1/enabled=0/g" /etc/yum.repos.d/ius.repo

# 最新Apache httpdを導入するための事前ツール
RUN yum -y install centos-logos.noarch mailcap openldap-devel expat-devel libdb-devel openssl perl \
  && yum clean all

# Nghttp2(HTTP/2コアエンジン)、Brotli(ブロートリ)
RUN yum --enablerepo=epel -y install nghttp2 brotli \
  && yum clean all

# 最新のApache httpd を導入
RUN yum  -y install --disablerepo=base,extras,updates --enablerepo=ius httpd httpd-devel mod_ssl httpd-tools openssh-server openssh-clients openssl sudo which \
  && yum clean all

# Apache httpd の常時起動
RUN systemctl enable httpd.service

# httpd, sshd, scp, openssl, sudo, which の導入
# RUN yum install -y httpd httpd-tools openssh-server openssh-clients openssl sudo which \
#   && yum clean all

# libmcrypt, supervisor の導入
RUN yum install --enablerepo=epel -y libmcrypt supervisor \
  && yum clean all

# libraqmの導入(gd-lastでエラーになるため追加)
RUN yum -y install --enablerepo=epel libraqm

# gd-last (for php-gd) の導入
RUN yum install --enablerepo=remi -y gd-last \
  && yum clean all

# php7.4 の導入
RUN yum --enablerepo=remi-php74,epel install -y php php-devel php-gd php-mbstring php-mcrypt php-mysqlnd php-pear php-xml php-opcache php-cli php-common php-gmp php-pdo phpcs \
  && yum clean all

# php.ini と apacheの設定ファイルを準備してあるものに置き換える
COPY php.ini /etc/php.ini
RUN rm /etc/httpd/conf.d/welcome.conf
COPY httpd.conf /etc/httpd/conf/httpd.conf

# composer の導入
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# phpunit の導入
RUN curl -L https://phar.phpunit.de/phpunit.phar > /usr/local/bin/phpunit \
  && chmod +x /usr/local/bin/phpunit

# wget git unzip patch の導入
RUN yum install -y wget git zip unzip patch

# ログ出力先
RUN usermod -u 1000 apache \
  && ln -sf /dev/stdout /var/log/httpd/access_log \
  && ln -sf /dev/stderr /var/log/httpd/error_log

# Node.js(ver.14)をインストール
RUN curl -sL https://rpm.nodesource.com/setup_14.x | bash -
RUN yum install -y nodejs

# Laravel用
# RUN mkdir /var/www/html/

# phpcsの導入とデフォルトで利用する規約の設定
WORKDIR /var/www/html/src
#RUN wget https://github.com/eviweb/fuelphp-phpcs/archive/master.zip
#RUN unzip master.zip
#RUN mv fuelphp-phpcs-master/Standards/FuelPHP /usr/share/pear/PHP/CodeSniffer/Standards/FuelPHP
#RUN rm -rf master.zip fuelphp-phpcs-master
#RUN phpcs --config-set default_standard FuelPHP

# メール送信用sendmailのインストール
RUN yum install --enablerepo=epel -y ssmtp \
  && yum clean all
COPY ssmtp.conf /etc/ssmtp/ssmtp.conf

# locale設定
RUN yum install -y gcc
RUN rm -f /etc/rpm/macros.image-language-conf \
  && sed -i '/^override_install_langs=/d' /etc/yum.conf \
  && yum -y update \
  && yum -y reinstall glibc-common \
  && yum clean all
RUN localedef -f UTF-8 -i ja_JP ja_JP.UTF-8
ENV LANG="ja_JP.UTF-8" \
    LANGUAGE="ja_JP:ja" \
    LC_ALL="ja_JP.UTF-8"
RUN unlink /etc/localtime
RUN ln -s /usr/share/zoneinfo/Japan /etc/localtime

# exec.
CMD ["/usr/sbin/httpd", "-DFOREGROUND"]
