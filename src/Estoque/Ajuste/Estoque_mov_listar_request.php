<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Solicitação de listagem de ajuste de estoque.
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados
 * @pw_element string $ordenar_por Ordenar o resultado da página por:<BR><BR>DATA_MOVIMENTO<BR>LOCAL_ESTOQUE<BR>PRODUTO
 * @pw_element string $cod_int_ajuste Código de Integração com sistemas legados.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element integer $id_prod Código do Produto.
 * @pw_element string $tipo Tipo do Ajuste de Estoque.<BR><BR><BR>Pode ser:<BR><BR>ENT - Efetua uma entrada no estoque.<BR>SAI - Efetua uma saída no estoque.<BR>SLD - Efetua um ajuste do estoque.
 * @pw_element string $origem Origem do Movimento de Estoque.<BR><BR><BR>Pode ser:<BR><BR>AJU - Ajuste manual de estoque.<BR>PDV - Ajuste realizado pelo PDV.
 * @pw_element string $motivo Motivo do ajuste.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>Entrada:<BR>INV - Ajuste por Inventário.<BR>OPE - Integração com Ordem de Produção ? Entrada.<BR>PDV - Integração com PDV.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR><BR>Saída:<BR>INV - Ajuste por Inventário.<BR>PER - Baixa por Perda ou Quebra.<BR>OPS - Integração com Ordem de Produção - Saída.<BR>PDV - Integração com PDV.<BR><BR>Ajuste saldo estoque:<BR>INV - Ajuste por Inventário.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR>CMC - Ajuste do Valor do CMC.<BR>PDV - Integração com PDV.<BR><BR>Transferência entre locais:<BR>TPQ - Transferência por Perda ou Quebra.<BR>TRF - Transferência entre Locais de Estoque.
 * @pw_element string $data_movimento_de Data do Movimento inicio.
 * @pw_element string $data_movimento_ate Data movimento final.
 * @pw_element string $apenas_importado_api Preencher com "S" ou "N".
 * @pw_complex estoque_mov_listar_request
 */
class Estoque_mov_listar_request{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Ordenar o resultado da página por:<BR><BR>DATA_MOVIMENTO<BR>LOCAL_ESTOQUE<BR>PRODUTO
	 *
	 * @var string
	 */
	public string $ordenar_por;
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
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
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
	 * Data do Movimento inicio.
	 *
	 * @var string
	 */
	public string $data_movimento_de;
	/**
	 * Data movimento final.
	 *
	 * @var string
	 */
	public string $data_movimento_ate;
	/**
	 * Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
}
