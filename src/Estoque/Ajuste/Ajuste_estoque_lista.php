<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Estoque mínimo para o produto.
 *
 * @pw_element integer $id_ajuste Código do local do estoque.
 * @pw_element string $cod_int_ajuste Código de Integração com sistemas legados.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element integer $id_prod Código do produto.
 * @pw_element string $data Data do ajuste.
 * @pw_element string $obs Observação do movimento de estoque.
 * @pw_element integer $codigo_local_estoque_ds ID do Local de Estoque de Destino
 * @pw_element decimal $quan quantidade do movimento.
 * @pw_element decimal $valor Valor do Movimento.
 * @pw_element string $tipo Tipo do Ajuste de Estoque.<BR><BR><BR>Pode ser:<BR><BR>ENT - Efetua uma entrada no estoque.<BR>SAI - Efetua uma saída no estoque.<BR>SLD - Efetua um ajuste do estoque.
 * @pw_element string $origem Origem do Movimento de Estoque.<BR><BR><BR>Pode ser:<BR><BR>AJU - Ajuste manual de estoque.<BR>PDV - Ajuste realizado pelo PDV.
 * @pw_element string $motivo Motivo do ajuste.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>Entrada:<BR>INV - Ajuste por Inventário.<BR>OPE - Integração com Ordem de Produção ? Entrada.<BR>PDV - Integração com PDV.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR><BR>Saída:<BR>INV - Ajuste por Inventário.<BR>PER - Baixa por Perda ou Quebra.<BR>OPS - Integração com Ordem de Produção - Saída.<BR>PDV - Integração com PDV.<BR><BR>Ajuste saldo estoque:<BR>INV - Ajuste por Inventário.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR>CMC - Ajuste do Valor do CMC.<BR>PDV - Integração com PDV.<BR><BR>Transferência entre locais:<BR>TPQ - Transferência por Perda ou Quebra.<BR>TRF - Transferência entre Locais de Estoque.
 * @pw_element string $bloqueado Cadastro Bloqueado pela API [S/N]
 * @pw_element string $imp_api Gerado pela API [S/N]
 * @pw_complex ajuste_estoque_lista
 */
class Ajuste_estoque_lista{
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $id_ajuste;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public string $cod_int_ajuste;
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
	/**
	 * Data do ajuste.
	 *
	 * @var string
	 */
	public string $data;
	/**
	 * Observação do movimento de estoque.
	 *
	 * @var string
	 */
	public string $obs;
	/**
	 * ID do Local de Estoque de Destino
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque_ds;
	/**
	 * quantidade do movimento.
	 *
	 * @var decimal
	 */
	public float $quan;
	/**
	 * Valor do Movimento.
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Tipo do Ajuste de Estoque.<BR><BR><BR>Pode ser:<BR><BR>ENT - Efetua uma entrada no estoque.<BR>SAI - Efetua uma saída no estoque.<BR>SLD - Efetua um ajuste do estoque.
	 *
	 * @var string
	 */
	public string $tipo;
	/**
	 * Origem do Movimento de Estoque.<BR><BR><BR>Pode ser:<BR><BR>AJU - Ajuste manual de estoque.<BR>PDV - Ajuste realizado pelo PDV.
	 *
	 * @var string
	 */
	public string $origem;
	/**
	 * Motivo do ajuste.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>Entrada:<BR>INV - Ajuste por Inventário.<BR>OPE - Integração com Ordem de Produção ? Entrada.<BR>PDV - Integração com PDV.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR><BR>Saída:<BR>INV - Ajuste por Inventário.<BR>PER - Baixa por Perda ou Quebra.<BR>OPS - Integração com Ordem de Produção - Saída.<BR>PDV - Integração com PDV.<BR><BR>Ajuste saldo estoque:<BR>INV - Ajuste por Inventário.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR>CMC - Ajuste do Valor do CMC.<BR>PDV - Integração com PDV.<BR><BR>Transferência entre locais:<BR>TPQ - Transferência por Perda ou Quebra.<BR>TRF - Transferência entre Locais de Estoque.
	 *
	 * @var string
	 */
	public string $motivo;
	/**
	 * Cadastro Bloqueado pela API [S/N]
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * Gerado pela API [S/N]
	 *
	 * @var string
	 */
	public string $imp_api;
}
