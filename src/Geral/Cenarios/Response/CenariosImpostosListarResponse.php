<?php

namespace OmieLib\Geral\Cenarios\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cenarios\CenariosEncontrados;
use OmieLib\Geral\Cenarios\CenariosImpostosJsonClient;
use OmieLib\Geral\Cenarios\Impostos;
use OmieLib\Geral\Cenarios\Request\CenariosImpostosListarRequest;
use OmieLib\Geral\Cenarios\Request\CenariosListarRequest;

/**
 * Resposta da solicitação de listagem dos impostos do Cenários de Impostos para o produto e cliente.
 *
 * @pw_element integer $codigo_empresa Código interno identificador da Empresa.
 * @pw_element integer $codigo_cenario Código do Cenário de Impostos
 * @pw_element integer $codigo_cliente_omie Código interno de identificação do cliente
 * @pw_element string $codigo_cliente_integracao Código de Integração par ao cliente.
 * @pw_element integer $codigo_produto (Código interno utilizado apenas na API).<BR><BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar um produto via API, para obter uma melhor performance.
 * @pw_element string $codigo_produto_integracao Código de integração do produto.<BR><BR>(Utilizado para integração via API)<BR>Esse código não aparece na tela do Omie.
 * @pw_element string $codigo É o código do produto que é exibido na tela do Omie.<BR><BR>Ele pode ser alterado a qualquer momento.
 * @pw_element string $ncm NCM do produto utilizado na pesquisa
 * @pw_element string $consumo_final Indicação se a operação é uma venda para consumo final
 * @pw_element string $uf_cliente Estado onde o cliente está localizado.
 * @pw_element string $uf_empresa Estado onde a Empresa está localizada.
 * @pw_element string $cnae_cliente CNAE do cliente
 * @pw_element string $contribuinte_cliente Indicativo se o cliente é contribuinte.
 * @pw_element impostos $impostos Impostos do cenário fiscal para o produto e cliente
 * @pw_complex cenariosImpostosListarResponse
 */
class CenariosImpostosListarResponse{
	/**
	 * Código interno identificador da Empresa.
	 *
	 * @var integer
	 */
	public int $codigo_empresa;
	/**
	 * Código do Cenário de Impostos
	 *
	 * @var integer
	 */
	public int $codigo_cenario;
	/**
	 * Código interno de identificação do cliente
	 *
	 * @var integer
	 */
	public int $codigo_cliente_omie;
	/**
	 * Código de Integração par ao cliente.
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
	/**
	 * (Código interno utilizado apenas na API).<BR><BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar um produto via API, para obter uma melhor performance.
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Código de integração do produto.<BR><BR>(Utilizado para integração via API)<BR>Esse código não aparece na tela do Omie.
	 *
	 * @var string
	 */
	public string $codigo_produto_integracao;
	/**
	 * É o código do produto que é exibido na tela do Omie.<BR><BR>Ele pode ser alterado a qualquer momento.
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * NCM do produto utilizado na pesquisa
	 *
	 * @var string
	 */
	public string $ncm;
	/**
	 * Indicação se a operação é uma venda para consumo final
	 *
	 * @var string
	 */
	public string $consumo_final;
	/**
	 * Estado onde o cliente está localizado.
	 *
	 * @var string
	 */
	public string $uf_cliente;
	/**
	 * Estado onde a Empresa está localizada.
	 *
	 * @var string
	 */
	public string $uf_empresa;
	/**
	 * CNAE do cliente
	 *
	 * @var string
	 */
	public string $cnae_cliente;
	/**
	 * Indicativo se o cliente é contribuinte.
	 *
	 * @var string
	 */
	public string $contribuinte_cliente;
	/**
	 * Impostos do cenário fiscal para o produto e cliente
	 *
	 * @var Impostos
	 */
	public Impostos $impostos;
}
