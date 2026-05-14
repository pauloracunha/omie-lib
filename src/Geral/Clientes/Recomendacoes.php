<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Recomendações do cliente.
 *
 * @pw_element string $numero_parcelas Número de Parcelas padrão para as Vendas.
 * @pw_element integer $codigo_vendedor Código do Vendedor padrão.
 * @pw_element string $email_fatura Enviar a NF-e e Boleto para outro e-mail?
 * @pw_element string $gerar_boletos Por padrão: Gerar Boletos ao Emitir NF-e?
 * @pw_element integer $codigo_transportadora Código da Transportadora padrão.
 * @pw_element string $tipo_assinante Tipo de Assinante utilizado para notas fiscais via única (modelo 21 e 22).<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoAssinante" da API<BR>/api/v1/geral/tipoassinante/ para obter essa informação.
 * @pw_complex recomendacoes
 */
class Recomendacoes{
	/**
	 * Número de Parcelas padrão para as Vendas.
	 *
	 * @var string
	 */
	public string $numero_parcelas;
	/**
	 * Código do Vendedor padrão.
	 *
	 * @var integer
	 */
	public int $codigo_vendedor;
	/**
	 * Enviar a NF-e e Boleto para outro e-mail?
	 *
	 * @var string
	 */
	public string $email_fatura;
	/**
	 * Por padrão: Gerar Boletos ao Emitir NF-e?
	 *
	 * @var string
	 */
	public string $gerar_boletos;
	/**
	 * Código da Transportadora padrão.
	 *
	 * @var integer
	 */
	public int $codigo_transportadora;
	/**
	 * Tipo de Assinante utilizado para notas fiscais via única (modelo 21 e 22).<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoAssinante" da API<BR>/api/v1/geral/tipoassinante/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $tipo_assinante;
}
