<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Lista de distribuição por departamentos
 *
 * @pw_element string $cCodDepto ID do Departamento.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>http://app.omie.com.br/api/v1/geral/departamentos/<BR>para obter essa informação.
 * @pw_element decimal $nPerc Percentual de Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_element decimal $nValor Valor do Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_element string $nValorFixo Indica que o valor foi fixado na distribuição do rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_complex Departamentos
 */
class Departamentos{
	/**
	 * ID do Departamento.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>http://app.omie.com.br/api/v1/geral/departamentos/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCodDepto;
	/**
	 * Percentual de Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
	 *
	 * @var decimal
	 */
	public float $nPerc;
	/**
	 * Valor do Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Indica que o valor foi fixado na distribuição do rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
	 *
	 * @var string
	 */
	public string $nValorFixo;
}
