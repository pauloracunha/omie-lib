<?php

namespace OmieLib\Geral\Cenarios;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cenarios\Request\CenariosImpostosListarRequest;
use OmieLib\Geral\Cenarios\Request\CenariosListarRequest;
use OmieLib\Geral\Cenarios\Response\CenariosImpostosListarResponse;
use OmieLib\Geral\Cenarios\Response\CenariosListarResponse;

/**
 * Lista de Cenários de Impostos encontrados.
 *
 * @pw_element integer $nCodigo Código do Cenário de Impostos.
 * @pw_element string $cNome Nome do Cenário de Impostos.
 * @pw_element boolean $padrao Indica se o Cenário de Impostos é padrão.
 * @pw_element string $industria Indica se o cenário se aplica a Indústria.
 * @pw_element string $comercioVarejista Indica se o Cenário de Impostos se aplica ao Comércio (Varejista).
 * @pw_element boolean $comercioAtacadista Indica se o Cenário de Impostos se aplica ao Comércio (Atacadista).
 * @pw_element boolean $prestadorServico Indica se o Cenário de Impostos se aplica a Prestação de Serviço.
 * @pw_element boolean $construcaoCivil Indica se o Cenário de Impostos se aplica a Construção Civil.
 * @pw_element string $inativo Indica se o cenário está inativo [S/N]
 * @pw_element string $dInc Data de Inclusão.
 * @pw_element string $hInc Hora de inclusão.
 * @pw_element string $uInc Código do usuário que realizou a inclusão.
 * @pw_element string $dAlt Data de alteração.
 * @pw_element string $hAlt Hora de alteração.
 * @pw_element string $uAlt Código do usuário que realizou a alteração.
 * @pw_complex cenariosEncontrados
 */
class CenariosEncontrados{
	/**
	 * Código do Cenário de Impostos.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Nome do Cenário de Impostos.
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Indica se o Cenário de Impostos é padrão.
	 *
	 * @var boolean
	 */
	public bool $padrao;
	/**
	 * Indica se o cenário se aplica a Indústria.
	 *
	 * @var string
	 */
	public string $industria;
	/**
	 * Indica se o Cenário de Impostos se aplica ao Comércio (Varejista).
	 *
	 * @var string
	 */
	public string $comercioVarejista;
	/**
	 * Indica se o Cenário de Impostos se aplica ao Comércio (Atacadista).
	 *
	 * @var boolean
	 */
	public bool $comercioAtacadista;
	/**
	 * Indica se o Cenário de Impostos se aplica a Prestação de Serviço.
	 *
	 * @var boolean
	 */
	public bool $prestadorServico;
	/**
	 * Indica se o Cenário de Impostos se aplica a Construção Civil.
	 *
	 * @var boolean
	 */
	public bool $construcaoCivil;
	/**
	 * Indica se o cenário está inativo [S/N]
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Data de Inclusão.
	 *
	 * @var string
	 */
	public string $dInc;
	/**
	 * Hora de inclusão.
	 *
	 * @var string
	 */
	public string $hInc;
	/**
	 * Código do usuário que realizou a inclusão.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data de alteração.
	 *
	 * @var string
	 */
	public string $dAlt;
	/**
	 * Hora de alteração.
	 *
	 * @var string
	 */
	public string $hAlt;
	/**
	 * Código do usuário que realizou a alteração.
	 *
	 * @var string
	 */
	public string $uAlt;
}
