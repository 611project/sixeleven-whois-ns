<?php
/*
    Configuration file: whois service for blockchain domains

    (c) 2017-2018 SUBNETS.RU for bitname.ru project (Moscow, Russia)
    Authors: Panfilov Alexey <lehis@subnets.ru>, Nikolaev Dmitry <virus@subnets.ru> 

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 3 of the License

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 THIS SOFTWARE IS PROVIDED BY THE AUTHOR AND CONTRIBUTORS ``AS IS'' AND
 ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 ARE DISCLAIMED.  IN NO EVENT SHALL THE AUTHOR OR CONTRIBUTORS BE LIABLE
 FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS
 OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
 OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 SUCH DAMAGE.
*/

define( 'DEBUG', 0 );		//0 - debug is off; 1 - debug is on
//define( 'RPC_LOG', @fopen( realpath( dirname(__FILE__) )."/rpc.log", 'a+' ) );
$chain = array(
    'namecoin' => array(
	'RPC_USER' => 'username',
	'RPC_PASS' => 'password',
	'RPC_HOST' => '127.0.0.1',
	'RPC_PORT' => 8336,
	'RPC_TIMEOUT' => 10,
    ),
    'emercoin' => array(
	'RPC_USER' => 'username',
	'RPC_PASS' => 'password',
	'RPC_HOST' => '127.0.0.1',
	'RPC_PORT' => 6662,
	'RPC_TIMEOUT' => 10,
    ),
    'sixeleven' => array(
	'RPC_USER' => 'username',
	'RPC_PASS' => 'password',
	'RPC_HOST' => '127.0.0.1',
	'RPC_PORT' => 8332,
	'RPC_TIMEOUT' => 10,
    ),
);

?>