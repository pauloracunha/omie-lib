<?php

namespace OmieLib\Geral\Cenarios\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cenarios\CenariosEncontrados;
use OmieLib\Geral\Cenarios\CenariosImpostosJsonClient;
use OmieLib\Geral\Cenarios\Impostos;
use OmieLib\Geral\Cenarios\Response\CenariosImpostosListarResponse;
use OmieLib\Geral\Cenarios\Response\CenariosListarResponse;

/**
 * Solicitação de listagem dos Impostos do Cenário para o produto e cliente.
 *
 * @pw_element integer $codigo_cliente_omie Código interno de identificação do cliente
 * @pw_element string $codigo_cliente_integracao Código de Integração par ao cliente.
 * @pw_element string $consumo_final Indicação se a operação é uma venda para consumo final
 * @pw_element string $codigo É o código do produto que é exibido na tela do Omie.<BR><BR>Ele pode ser alterado a qualquer momento.
 * @pw_element integer $codigo_produto (Código interno utilizado apenas na API).<BR><BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar um produto via API, para obter uma melhor performance.
 * @pw_element string $codigo_produto_integracao Código de integração do produto.<BR><BR>(Utilizado para integração via API)<BR>Esse código não aparece na tela do Omie.
 * @pw_element integer $codigo_cenario Código do Cenário de Impostos
 * @pw_complex cenariosImpostosListarRequest
 */
class CenariosImpostosListarRequest{
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
	 * Indicação se a operação é uma venda para consumo final
	 *
	 * @var string
	 */
	public string $consumo_final;
	/**
	 * É o código do produto que é exibido na tela do Omie.<BR><BR>Ele pode ser alterado a qualquer momento.
	 *
	 * @var string
	 */
	public string $codigo;
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
	 * Código do Cenário de Impostos
	 *
	 * @var integer
	 */
	public int $codigo_cenario;
}
